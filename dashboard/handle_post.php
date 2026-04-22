<?php
session_start();

require_once "../db.php";


if ($_SERVER['REQUEST_METHOD']  === "POST") {


    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // exit;

    // get data 
    $title        = $_POST['title'];
    $category_id  = $_POST['category_id'];
    $excerpt      = $_POST['excerpt'];
    $content      = $_POST['content'];
    $user_id      = $_SESSION['user_id'];

    

    // TODO addd validations and errors
    if (!isset($title) || empty($title)) {
        $_SESSION['title_error'] = "Post title  is required";
        header("Location: ./create_post.php");
        exit;
    }

    // UPLOADING STUDENT PHOTO
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $size     = $_FILES['image']['size'];

    $folder = "../uploads/";

    // check image is valid type
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (in_array($ext, ['jpg', 'jpeg', 'png']) == false) {
        $_SESSION['photo_error'] = "Please select valid image file";
        header("Location: ./create_post.php");
        exit;
    }

    // create unique file name 
    $new_name = time() . "_" . $filename;
    $target   = $folder . $new_name;

     // move file to uploads folder
    if(move_uploaded_file($tmp_name, $target) == false) {
         $_SESSION['photo_error'] = "Photo is not uploded please try again.";
        header("Location: ./create_post.php");
        exit;
    }


    // 3. prepare query
    $sql = "INSERT INTO posts (title, excerpt, content, user_id, category_id, image) VALUES('$title', '$excerpt', '$content', '$user_id', '$category_id', '$new_name') ";

    // 4. run query   
    if( mysqli_query($conn, $sql) ) {
        header("Location: ./index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    die("The method is not allowed");
}
