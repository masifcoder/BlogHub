<?php
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

// incude database connection
require_once "db.php";

// 2. collect data and validate data
$name       = $_POST['name'];
$email      = $_POST['email'];
$age        = $_POST['age'];
$gender     = $_POST['gender'];
$password   = $_POST['password'];

if (!isset($name) || empty($name)) {
    $_SESSION['name_error'] = "Name field is required";
    header("Location: register.php");
    exit;
}

if (!isset($email) || empty($email)) {
    $_SESSION['email_error'] = "Email field is required";
    header("Location: register.php");
    exit;
}


if (!isset($gender) || empty($gender)) {
    $_SESSION['gender_error'] = "Gender field is required";
    header("Location: register.php");
    exit;
}


if (!isset($age) || empty($age)) {
    $_SESSION['age_error'] = "Age field is required";
    header("Location: register.php");
    exit;
}

if (!isset($password) || empty($password)) {
    $_SESSION['password_error'] = "Password field is required";
    header("Location: register.php");
    exit;
} else if (strlen($password) < 6) {
    $_SESSION['password_error'] = "Password lenght should be atleast 6 characters";
    header("Location: register.php");
    exit;
}

// check user is already registered or not ?
// 1. select record from users table to confrim with this username a user is already registered or not?
$sel_sql = "SELECT * FROM users WHERE email='$email' ";
$sel_result = mysqli_query($conn, $sel_sql);
if (mysqli_num_rows($sel_result) > 0) {
    $_SESSION['email_error'] = "Email address is already registered.";
    header("Location: register.php");
    exit;
}

// hashing password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 3. prepare query
$sql = "INSERT INTO users (name, email, age, gender, password) VALUES('$name', '$email', '$age', '$gender', '$hashed_password') ";

// 4. run query   
if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit;
} else {
    die("Error: " . mysqli_error($conn));
}
