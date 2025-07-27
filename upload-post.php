<?php 
session_start();
    $caption = $_POST['caption'];
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $user_id = $_SESSION['user_id'];
    move_uploaded_file($imageTmp,'./post_images/' . $imageName);

    include './config.php';

    $insert = "INSERT INTO posts (image,caption,user_id) VALUES ('$imageName','$caption',$user_id)";
    mysqli_query($connection,$insert);
    header("Location: http://localhost:3000/index.php");




?>