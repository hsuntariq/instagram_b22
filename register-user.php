<?php 
    session_start();
    $m_mail  = $_POST['m_mail'];
    $pass = $_POST['password'];
    $name = $_POST['fullname'];
    $u_name = $_POST['username'];

    include './config.php';

    $insert = "INSERT INTO users (m_mail,password,fullname,username) VALUES ('$m_mail','$pass','$name','$u_name')";



    mysqli_query($connection,$insert);


    $_SESSION['ticket'] = $u_name;
    $_SESSION['fullname'] = $name;
    

    header("Location: http://localhost:3000/index.php");

?>