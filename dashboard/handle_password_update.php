<?php

session_start();

if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
    $_SESSION['auth_error'] = "Please login to view dashboard";
    header("Location: ../login.php");
    exit;
}


require_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // get form data
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // validate form data
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        $_SESSION['password_update_error'] = "All fields are required";
        header("Location: password-settings.php");
        exit;
    }

        if ($new_password !== $confirm_password) {
            $_SESSION['password_update_error'] = "New password and confirm password do not match";
            header("Location: password-settings.php");
            exit;
        }

        // confirm current password
        $user_id = $_SESSION['user_id'];    
        $stmt = "select password from users where id = $user_id";
        $result = mysqli_query($conn, $stmt);
        $user = mysqli_fetch_assoc($result);

        if (!password_verify($current_password, $user['password'])) {
            $_SESSION['password_update_error'] = "Current password is incorrect";
            header("Location: password-settings.php");
            exit;
        }

        // update password
        $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT);

        $stmt = "UPDATE users SET password = '$new_password_hash' WHERE id = $user_id";
        mysqli_query($conn, $stmt);

        $_SESSION['password_update_success'] = "Password updated successfully";
        header("Location: password-settings.php");
        exit;

}
