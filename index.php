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




    <div class="container-fluid ps-0">

        <div class="row">
            <!-- sidebar -->
            <div class="col-2">
                <?php include './sidebar.php' ?>
            </div>
            <!-- main content -->
            <div style="height:97vh;overflow-y:scroll"
                class="col-xl-7 col-md-10 p-5 d-flex flex-column main-content align-items-center">
                <?php include './main-content.php' ?>
            </div>
            <!-- user section -->
            <div class="col-xl-3 py-5">
                <div class="d-flex">
                    <div class="d-flex align-items-center gap-3">
                        <?php 
                                                include './config.php';
                                                $user_id = $_SESSION['user_id'];
                                                $user_image = "SELECT profile_image FROM users WHERE id = $user_id";
                                                $result = mysqli_query($connection,$user_image);
                                                foreach ($result as $value) {
                                                if($value['profile_image'] == NULL){
                                                        echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' width='60px' height='60px' class='rounded-circle object-fit-cover' id='profileImage'
                                                style='cursor:pointer;'>";
                                                }else{
                                                    echo "<img src='./profile_images/{$value['profile_image']}' alt='Profile' width='60px' height='60px' class='rounded-circle object-fit-cover' id='profileImage'>";
                                                }
                                                
                                                }
                                        ?>
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