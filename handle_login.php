<?php
session_start();


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;


// incude database connection
require_once "db.php";

// 2. collect data and validate data
$email = $_POST['email'];
$password  = $_POST['password'];

if (!isset($email) || empty($email)) {
    $_SESSION['email_error'] = "Email field is required";
    header("Location: login.php");
    exit;
}
if (!isset($password) || empty($password)) {
    $_SESSION['password_error'] = "Password field is required";
    header("Location: login.php");
    exit;
}

// 1. check user is registered or not
$sel_sql = "SELECT * FROM users WHERE email='$email' ";
$sel_result = mysqli_query($conn, $sel_sql);
if (mysqli_num_rows($sel_result) == 0) {
    $_SESSION['notregister_error'] = "Username or Password is incorrect";
    header("Location: login.php");
    exit;
}

// 2.  get registerd user
$user = mysqli_fetch_assoc($sel_result);

// 3. verify password is correct
if (password_verify($password, $user['password']) === true) {
    $_SESSION['is_login'] = true;
    $_SESSION['name'] = $user['name'];
    $_SESSION['user_id'] = $user['id'];
     header("Location: dashboard/index.php");
     exit;
} else {
    $_SESSION['notregister_error'] = "Username or Password is incorrect";
    header("Location: login.php");
    exit;
}