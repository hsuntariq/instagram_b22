<?php 
session_start();
    include './config.php';
    $profile_image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $user_id = $_SESSION['user_id'];
    move_uploaded_file($tmp_name,'./profile_images/' . $profile_image);
    
    $updateImage = "UPDATE users SET profile_image = '$profile_image' WHERE id = $user_id";
    mysqli_query($connection,$updateImage);
    header("Location: http://localhost:3000/profile.php");
?>