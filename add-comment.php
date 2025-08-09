<?php 
    session_start();
    include './config.php';
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['p_id'];
    $currentPage = $_SERVER['HTTP_REFERER'];

    $add = "INSERT INTO comments (comment,user_id,post_id) VALUES ('$comment',$user_id,$post_id)";
$result =     mysqli_query($connection,$add);
if($result){
    echo 1;
}else{
    echo 0;
}


?>