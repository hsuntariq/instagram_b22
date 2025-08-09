<?php 
    include './config.php';
    $post_id = $_GET['post_id'];

    $getComments = "SELECT comments.id AS comment_id,comments.comment,posts.id AS post_id,posts.image,posts.caption,users.fullname,users.username,users.profile_image,users.id AS user_id FROM comments JOIN posts ON comments.post_id = posts.id JOIN users ON comments.user_id = users.id";
    $result = mysqli_query($connection,$getComments);
    foreach($result as $item){
?>
<div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="d-flex  gap-1 align-items-center">
            <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
                style="height: 30px;width:30px;background:linear-gradient(45deg,orange,red,yellow)">
                <img src="./post_images/<?php echo $item['profile_image'] ?>" class="object-fit-cover rounded-circle"
                    width="93%" height="93%" alt="">
            </div>
            <div class="">
                <div class="d-flex gap-2">
                    <h6 class="m-0" style="font-size:0.7rem"><?php echo $item['fullname'] ?></h6>
                    <p style="font-size:0.6rem" class="text-secondary m-0">
                        <?php echo $item['comment']?>
                    </p>
                </div>
                <div class="d-flex gap-2">
                    <p class="m-0 text-xxsm">5d</p>
                    <p class="m-0 text-xxsm">2 likes</p>
                    <p class="m-0 text-xxsm">Reply</p>
                </div>
            </div>

        </div>
        <i class="bi bi-heart text-xsm"></i>
    </div>
</div>
<?php 
    }
?>