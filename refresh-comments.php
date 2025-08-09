<?php 
    include './config.php';
    $post_id = $_POST['post_id'];


    $countComment = "SELECT COUNT(id) AS total FROM comments WHERE post_id = $post_id";
    $result = mysqli_query($connection,$countComment);
    foreach ($result as $row) {
        echo $row['total'];        
    }
   



?>