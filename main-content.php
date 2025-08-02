<!-- stories -->
<div class="d-flex gap-2 col-md-7">
    <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
        style="height: 70px;width:70px;background:linear-gradient(45deg,orange,red,yellow)">
        <img src="https://dailytimes.com.pk/assets/uploads/2024/10/Nawaz-Sharif-returns-to-London-amid-protests.jpg"
            class="object-fit-cover rounded-circle" width="93%" height="93%" alt="">
    </div>
    <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
        style="height: 70px;width:70px;background:linear-gradient(45deg,orange,red,yellow)">
        <img src="https://i.tribune.com.pk/media/images/imrankhanhands1726244291-0/imrankhanhands1726244291-0-640x480.webp"
            class="object-fit-cover rounded-circle" width="93%" height="93%" alt="">
    </div>
    <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
        style="height: 70px;width:70px;background:linear-gradient(45deg,orange,red,yellow)">
        <img src="https://i0.wp.com/globalkashmir.net/wp-content/uploads/2025/07/Asim-Munir-II_copy_800x453.png"
            class="object-fit-cover rounded-circle" width="93%" height="93%" alt="">
    </div>
</div>

<!-- my post -->


<?php 
    include './config.php';
    $posts = "SELECT posts.id AS post_id,posts.image,posts.caption,users.id AS user_id,users.fullname,users.username,users.profile_image FROM posts JOIN users ON posts.user_id = users.id ORDER BY(posts.id) DESC";
    $result = mysqli_query($connection,$posts);
    foreach($result as $item){
?>

<div class="card pb-3 col-xl-6 col-lg-7 col-md-9 border-0 shadow-lg my-4 rounded-md">
    <div class="d-flex p-2 justify-content-between align-items-center">
        <div class="d-flex  gap-1 align-items-center">
            <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
                style="height: 40px;width:40px;background:linear-gradient(45deg,orange,red,yellow)">
                <!-- <img src="https://i0.wp.com/globalkashmir.net/wp-content/uploads/2025/07/Asim-Munir-II_copy_800x453.png"
                    class="object-fit-cover rounded-circle" width="93%" height="93%" alt=""> -->

                <?php 
                if($item['profile_image'] == NULL){
                                                        echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' class='object-fit-cover rounded-circle' width='93%' height='93%' alt=''
                                                style='cursor:pointer;'>";
                                                }else{
                                                    echo "<img src='./profile_images/{$item['profile_image']}' alt='Profile' class='object-fit-cover rounded-circle' width='93%' height='93%' alt=''
                                                style='cursor:pointer;'>";
                                                }
            ?>


            </div>
            <h6 class="m-0 text-capitalize" style="font-size:0.7rem">
                <?php echo $item['fullname'] ?>
            </h6>
            <i class="bi bi-dot"></i>
            <p style="font-size:0.6rem" class="text-secondary m-0">3d</p>
        </div>
        <i class="bi bi-three-dots"></i>
    </div>

    <!-- check file type -->
    <div class="post position-relative">

        <?php 
            $image = $item['image'];
            $split = explode('.',$image);
            $ext = end($split);
            if($ext == 'mp4' || $ext == 'mkv'){
                echo "<i class='bi bi-volume-mute volume-btn d-flex position-absolute  justify-content-center align-items-center text-white rounded-circle'
            style='width:25px;height:25px;background-color:rgba(0,0,0,0.6);right:10px;bottom:10px;cursor:pointer;z-index:222'></i>";
                echo "<video autoplay loop muted class='object-fit-cover post-video' src='./post_images/{$item['image']}' width='100%' height='500px' alt=''></video>";
            }else{
                echo "<img class='object-fit-cover' src='./post_images/{$item['image']}' width='100%'
                height='500px' alt=''>";
            }
            ?>
    </div>




    <div class="p-2 d-flex justify-content-between">
        <div class="d-flex gap-2">
            <i class="bi bi-heart fw-bold fs-6 cursor-pointer"></i>
            <i class="bi bi-chat fw-bold fs-6 cursor-pointer comment-icon"></i>
            <i class="bi bi-send fw-bold fs-6 cursor-pointer"></i>
        </div>
        <i class="bi bi-bookmark fw-bold fs-6"></i>
    </div>

    <div class="p-2 pt-0">
        <p style="font-size: 0.8rem;" class="m-0 fw-bold">
            254 likes
        </p>
    </div>

    <div class="p-2 pt-0">
        <div class="d-flex gap-1">
            <span class="fw-bold text-sm">
                <?php 
                    echo $item['username'];
                ?>
            </span>
            <span class="text-secondary text-sm m-0">
                <?php echo $item['caption'] ?>
            </span>
        </div>
    </div>

    <p class="pt-0 view-all-comment px-2 text-xsm m-0 text-secondary">
        View All 9 comments
    </p>

    <form action="" class="px-2 w-100">
        <input style="outline-width: 0;" type="text"
            class="border w-100 border-end-0 text-secondary-empahsis text-sm border-top-0 border-start-0 border-bottom-1"
            placeholder="Add a comment...">
    </form>


</div>

<?php 
    }
?>