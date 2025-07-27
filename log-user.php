<?php 
    session_start();
    $m_mail = $_POST['m_mail'];
    $pass = $_POST['password'];
    include './config.php';

    $login = "SELECT * FROM users WHERE m_mail = '$m_mail' AND password = '$pass'";

    $res = mysqli_query($connection,$login);
    if(mysqli_num_rows($res) > 0){
        foreach($res as $item){
                $_SESSION['ticket'] = $item['m_mail'];
                $_SESSION['fullname'] = $item['fullname'];
                $_SESSION['user_id'] = $item['id'];
                $_SESSION['welcome'] = 'Welcome back ' . $item['fullname'];
                header("Location: http://localhost:3000/index.php");
        }
    }else{
        $_SESSION['invalid_credentials'] = 'The credentials is incorrect. Please check it.';
        header("Location: http://localhost:3000/login.php");
    }

    


?>