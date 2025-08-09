<!-- overlay -->

<div style="height: 100vh;width:100vw;background:rgba(0,0,0,0.6)"
    class="position-fixed overlay d-none justify-content-center align-items-center top-0 z-3">
    <i class="bi bi-x-lg close-overlay text-white position-fixed" style="top:10px;right:10px;cursor:pointer;"></i>
    <div class="col-xl-7 col-lg-8 my-overlay-content rounded-5 col-md-10 col-11 mx-auto position-relative"
        style="height: 70vh;z-index:888">
        <div class="row h-100 ">
            <div class="col-sm-7 h-100 my-image p-0">

            </div>
            <div style="height:100%;overflow-y:scroll" class="col-sm-5 rounded-end-2 bg-white p-1">
                <div class="d-flex p-2 justify-content-between align-items-center">
                    <div class="d-flex  gap-1 align-items-center">
                        <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
                            style="height: 40px;width:40px;background:linear-gradient(45deg,orange,red,yellow)">
                            <img src="" class="object-fit-cover post-image-main rounded-circle" width="93%" height="93%"
                                alt="">
                        </div>
                        <h6 class="m-0" style="font-size:0.7rem">Mere Jind Asim Munir</h6>
                        <i class="bi bi-dot"></i>
                        <p style="font-size:0.6rem" class="text-secondary m-0">3d</p>
                    </div>
                    <i class="bi bi-three-dots"></i>
                </div>

                <!-- comments section -->

                <div class="my-comments">

                </div>






            </div>
        </div>
    </div>
</div>




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

<div class="card my-post pb-3 col-xl-6 col-lg-7 col-md-9 border-0 shadow-lg my-4 rounded-md">
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
            style='width:25px;height:25px;background-color:rgba(0,0,0,0.6);right:10px;bottom:10px;cursor:pointer;z-index:22'></i>";
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
            <i data-id="<?php echo $item['post_id'] ?>" data-post_image="<?php echo $item['image'] ?>"
                class="bi bi-chat fw-bold fs-6 cursor-pointer comment-icon"></i>
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
        <?php 
            include './config.php';
            $countComments = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$item['post_id']}" ;
            $comResult = mysqli_query($connection,$countComments);
            foreach($comResult as $row){
                if($row['total'] == 0){
                    echo "No Comments";
                }else if($row['total'] == 1){
                    echo "View 1 comment";
                }else{
                    echo "View All " .  $row['total'] . ' comments';
                }
            }
        ?>

    </p>

    <form class="px-2 comment-form position-relative w-100">
        <input type="hidden" name="p_id" class="post_id" value="<?php echo $item['post_id'] ?>">
        <input name="comment" style="outline-width: 0;" type="text"
            class="border w-100 border-end-0 comments text-secondary-empahsis text-sm border-top-0 border-start-0 border-bottom-1"
            placeholder="Add a comment...">
        <button type="button" class="position-absolute text-secondary bg-transparent border-0 end-0 add-comm"
            style="rotate: 45deg;"><i class="bi bi-send"></i></button>

        <div style="top:45%;right:10px;width:15px;height:15px" class="spinner-border d-none position-absolute text-dark"
            role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </form>


</div>

<?php 
    }
?>




<script>
$('.add-comm').on('click', function() {
    let comment_btn = $(this);
    let comment = comment_btn.closest('.comment-form').find('.comments');
    let post_id = comment_btn.closest('.comment-form').find('.post_id')

    $.ajax({
        url: './add-comment.php',
        type: 'POST',
        data: {
            comment: comment.val(),
            p_id: post_id.val()
        },
        beforeSend: function() {
            $('.spinner-border').removeClass('d-none')
            comment_btn.addClass('d-none')
        },
        success: function(response) {
            $('.spinner-border').addClass('d-none')
            comment_btn.removeClass('d-none')
            comment.val('')
        }
    })

})


$('.add-comm').on('click', function() {
    let myBtn = $(this);
    let post_id = myBtn.closest('.comment-form').find('.post_id').val()
    let commentText = myBtn.closest('.my-post').find('.view-all-comment')


    $.ajax({
        url: './refresh-comments.php',
        type: 'POST',
        data: {
            post_id
        },
        success: function(response) {

            if (response == 1) {
                commentText.html(`View  ${response} comment`)
            } else {
                commentText.html(`View all ${response} comments`)

            }
        }
    })


})



$('.comment-icon').on('click', function() {
    let post_id = $(this).data('id')
    let image = $(this).data('post_image')
    let extension = image.split('.').pop()
    $.ajax({
        url: './get-comments.php',
        type: 'GET',
        data: {
            post_id
        },
        success: function(response) {
            $('.my-comments').html(response)
            if (extension == 'mp4' || extension == 'mkv') {
                $('.my-image').html(
                    `<video width="100%" height="100%" class="object-fit-cover post-image-main rounded-start-2" src='./post_images/${image}' autoplay muted  loop></video>`
                )
            } else {
                $('.my-image').html(
                    ` <img width="100%" height="100%" class="object-fit-cover post-image-main rounded-start-2" src="./post_images/${image}" alt="">`
                )
            }
        }

    })
})
</script>