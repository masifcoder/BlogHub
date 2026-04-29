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

    $sql = "UPDATE users SET name='$name', bio='$bio' ";

    // validate image is uploaded or not
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {

        // upload profile image
        $filename = $_FILES['profile_image']['name'];
        $tmp_name = $_FILES['profile_image']['tmp_name'];
        $size     = $_FILES['profile_image']['size'];

        $folder = "../uploads/";

        // check image is valid type
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png']) == false) {
            $_SESSION['profile_update_error'] = "Please select valid image file";
            header("Location: profile-settings.php");
            exit;
        }
        // create unique file name 
        $new_name = time() . "_" . $filename;
        $target   = $folder . $new_name;
        // move file to uploads folder
        if (move_uploaded_file($tmp_name, $target) == false) {
            $_SESSION['profile_update_error'] = "Photo is not uploded please try again.";
            header("Location: profile-settings.php");
            exit;
        }

        $sql .= ", image='$new_name'";
    }


    $user_id = $_SESSION['user_id'];
    $sql  .= " WHERE id=$user_id";

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
