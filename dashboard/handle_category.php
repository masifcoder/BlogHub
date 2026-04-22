<?php
session_start();

if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
    $_SESSION['auth_error'] = "Please login to view dashboard";
    header("Location: ../login.php");
    exit;
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// incude database connection
require_once "../db.php";


// 2. collect data and validate data
$category_name       = $_POST['category_name'];

if (!isset($category_name) || empty($category_name)) {
    $_SESSION['name_error'] = "Category name is required";
    header("Location: ./category_form.php");
    exit;
}


// check category is already created ?

$sel_sql = "SELECT * FROM categories WHERE name='$category_name' ";
$sel_result = mysqli_query($conn, $sel_sql);
if (mysqli_num_rows($sel_result) > 0) {
    $_SESSION['name_error'] = "Category is already created.";
    header("Location: ./category_form.php");
    exit;
}

// 3. prepare query
$sql = "INSERT INTO categories (name) VALUES('$category_name') ";

// 4. run query   
if (mysqli_query($conn, $sql)) {
    header("Location: ./categories.php");
    exit;
} else {
    die("Error: " . mysqli_error($conn));
}

