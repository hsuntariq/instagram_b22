<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>
    <title>Instagram Login</title>
</head>

<body>
    <div class="container row mx-auto align-items-center min-vh-100">
        <div class="col-lg-6 ">
            <img src="https://static.cdninstagram.com/rsrc.php/v4/yE/r/e8VpFK6GuF9.png" class="d-block  mx-auto"
                width="50%" alt="">
        </div>
        <div class="col-lg-3">
            <form action="">
                <img class="d-none d-lg-block mx-auto"
                    src="https://logos-world.net/wp-content/uploads/2020/05/Instagram-Logo-2016-present.png"
                    width="100px" alt="">
                <input type="text" class="form-control my-2 rounded-1 text-sm" style="background-color:#FAFAFA"
                    placeholder="Phone number,username, or email">
                <input type="password" class="form-control my-2 rounded-1 text-sm" style="background-color:#FAFAFA"
                    placeholder="Password">
                <button class="btn w-100 text-white btn-info rounded-3 btn-sm">
                    Login
                </button>
            </form>

            <div class="d-flex gap-2 align-items-center">
                <hr class="w-100">
                <p class="m-0 fw-semibold text-xsm">OR</p>
                <hr class="w-100">
            </div>

            <div class="d-flex gap-2 align-items-center justify-content-center">
                <i class="bi bi-facebook text-primary"></i>
                <p class="text-primary text-sm m-0 fw-semibold">Log in with facebook</p>
            </div>

            <p class="text-sm text-dark fw-semibold text-center">
                Forgot Password
            </p>

            <p class="text-sm text-center">
                Don't have an account? <a href="./sign-up.php" class="text-primary text-decoration-none fw-semibold">
                    Sign Up
                </a>
            </p>
        </div>
    </div>
</body>

</html>