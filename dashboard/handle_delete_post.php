<?php
session_start();

require_once "../db.php";

// Check user is logged in
if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
    $_SESSION['auth_error'] = "Please login to view dashboard";
    header("Location: ../login.php");
    exit;
}

// Get post id from URL
$post_id = $_GET['id'] ?? '';

if (!isset($post_id) || empty($post_id)) {
    header("Location: ./posts.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch post data to get image filename
$sql = "SELECT image FROM posts WHERE id='$post_id' AND user_id='$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: ./posts.php");
    exit;
}

$post = mysqli_fetch_assoc($result);

// Delete the post from database
$delete_sql = "DELETE FROM posts WHERE id='$post_id' AND user_id='$user_id'";

if (mysqli_query($conn, $delete_sql)) {
    // Delete associated image file
    $folder = "../uploads/";
    if ($post['image'] != '' && file_exists($folder . $post['image'])) {
        unlink($folder . $post['image']);
    }

    header("Location: ./posts.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
