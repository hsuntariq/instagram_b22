<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>
    <title>Instagram</title>
</head>

<body>

    <?php 
        if(!isset($_SESSION['ticket'])){
            header("Location: http://localhost:3000/sign-up.php");
        }
    ?>


    <!-- sidebar footer -->
    <?php include './sidebar-footer.php' ?>
    <?php include './post-modal.php' ?>


    <?php 
        if(isset($_SESSION['welcome'])){
            include './welcome.php';
        }

        unset($_SESSION['welcome'])

    ?>

    <!-- overlay -->
    <div style="height: 100vh;width:100vw;background:rgba(0,0,0,0.6)"
        class="position-fixed overlay d-none justify-content-center align-items-center top-0 z-3">
        <i class="bi bi-x-lg close-overlay text-white position-fixed" style="top:10px;right:10px;cursor:pointer;"></i>
        <div class="col-xl-7 col-lg-8 my-overlay-content rounded-5 col-md-10 col-11 mx-auto" style="height: 70vh;">
            <div class="row h-100 ">
                <div class="col-sm-7  p-0">
                    <img width="100%" height="100%" class="object-fit-cover rounded-start-2"
                        src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202505/asim-munir-025754823-16x9_0.jpg?VersionId=8eJyERjM9hj8VFtddkKZXToJFUXKv_jf"
                        alt="">
                </div>
                <div class="col-sm-5 rounded-end-2 bg-white p-1">
                    <div class="d-flex p-2 justify-content-between align-items-center">
                        <div class="d-flex  gap-1 align-items-center">
                            <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
                                style="height: 40px;width:40px;background:linear-gradient(45deg,orange,red,yellow)">
                                <img src="https://i0.wp.com/globalkashmir.net/wp-content/uploads/2025/07/Asim-Munir-II_copy_800x453.png"
                                    class="object-fit-cover rounded-circle" width="93%" height="93%" alt="">
                            </div>
                            <h6 class="m-0" style="font-size:0.7rem">Mere Jind Asim Munir</h6>
                            <i class="bi bi-dot"></i>
                            <p style="font-size:0.6rem" class="text-secondary m-0">3d</p>
                        </div>
                        <i class="bi bi-three-dots"></i>
                    </div>

                    <!-- comments section -->

                    <div class="d-flex p-3 justify-content-between">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex  gap-1 align-items-center">
                                <div class="rounded-circle  border-warning d-flex justify-content-center align-items-center"
                                    style="height: 30px;width:30px;background:linear-gradient(45deg,orange,red,yellow)">
                                    <img src="https://i0.wp.com/globalkashmir.net/wp-content/uploads/2025/07/Asim-Munir-II_copy_800x453.png"
                                        class="object-fit-cover rounded-circle" width="93%" height="93%" alt="">
                                </div>
                                <div class="">
                                    <div class="d-flex gap-2">
                                        <h6 class="m-0" style="font-size:0.7rem">Khan Sahab</h6>
                                        <p style="font-size:0.6rem" class="text-secondary m-0">lorwem</p>
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




                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid ps-0">

        <div class="row">
            <!-- sidebar -->
            <div class="col-2">
                <?php include './sidebar.php' ?>
            </div>
            <!-- main content -->
            <div style="height:97vh;overflow-y:scroll"
                class="col-xl-7 col-md-10 p-5 d-flex flex-column align-items-center">
                <?php include './main-content.php' ?>
            </div>
            <!-- user section -->
            <div class="col-xl-3 py-5">
                <div class="d-flex">
                    <div class="d-flex align-items-center gap-3">
                        <img width="60px" height="60px" class="rounded-circle object-fit-cover"
                            src="https://upload.wikimedia.org/wikipedia/commons/4/46/PrimeMinisterNawazSharif.jpg"
                            alt="">
                        <div class="">
                            <h6 class="m-0">

                                <?php
                                echo $_SESSION['ticket']
                                ?>
                            </h6>
                            <p class="text-secondary m-0 text-sm">

                                <?php
                                echo $_SESSION['fullname']
                                ?>
                            </p>
                        </div>

                    </div>

                </div>
                <div class="d-flex justify-content-between col-6 my-3">
                    <h6 class="text-secondary text-sm">
                        Suggested for you
                    </h6>
                    <h6 class="text-dark text-sm">
                        See All
                    </h6>
                </div>
            </div>
            <!-- message is fixed -->

        </div>
    </div>

</body>

</html>