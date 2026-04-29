<?php

session_start();

if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
    $_SESSION['auth_error'] = "Please login to view dashboard";
    header("Location: ../login.php");
    exit;
}

require_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {


    $name = $_POST['fullname'];
    $bio = $_POST['bio'];

    // validate name value
    if (empty($name)) {
        $_SESSION['profile_update_error'] = "Name cannot be empty";
        header("Location: profile-settings.php");
        exit;
    }


    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE users SET name='$name', bio='$bio' WHERE id=$user_id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['profile_update_success'] = "Profile updated successfully";
        header("Location: profile-settings.php");
        exit;
    } else {
        $_SESSION['profile_update_error'] = "Error updating profile: " . mysqli_error($conn);
        header("Location: profile-settings.php");
        exit;
    }


}


?>