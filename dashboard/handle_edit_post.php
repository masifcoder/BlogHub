<?php
session_start();

require_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // Get data 
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];
    $old_image = $_POST['old_image'];
    $user_id = $_SESSION['user_id'];

    // Validate title
    if (!isset($title) || empty($title)) {
        $_SESSION['title_error'] = "Post title is required";
        header("Location: ./edit_post.php?id=$post_id");
        exit;
    }

    // Check if new image is uploaded
    $new_image = $old_image;

    if ($_FILES['image']['name'] != '') {
        $filename = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        $folder = "../uploads/";

        // Check image is valid type
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (in_array($ext, ['jpg', 'jpeg', 'png']) == false) {
            $_SESSION['photo_error'] = "Please select valid image file";
            header("Location: ./edit_post.php?id=$post_id");
            exit;
        }

        // Create unique file name 
        $new_name = time() . "_" . $filename;
        $target = $folder . $new_name;

        // Move file to uploads folder
        if (move_uploaded_file($tmp_name, $target) == false) {
            $_SESSION['photo_error'] = "Photo is not uploaded please try again.";
            header("Location: ./edit_post.php?id=$post_id");
            exit;
        }

        // Delete old image if exists
        if ($old_image != '' && file_exists($folder . $old_image)) {
            unlink($folder . $old_image);
        }

        $new_image = $new_name;
    }

    // Prepare update query
    $sql = "UPDATE posts SET title='$title', excerpt='$excerpt', content='$content', category_id='$category_id', image='$new_image' WHERE id='$post_id' AND user_id='$user_id'";

    // Run query   
    if (mysqli_query($conn, $sql)) {
        header("Location: ./posts.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    die("The method is not allowed");
}
