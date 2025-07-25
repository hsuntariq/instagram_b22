<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Sign Up</title>
    <?php include './bootstrap.php' ?>
    <style>
    body {
        background-color: #f0f2f5;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .form-control {
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #405de6;
        box-shadow: 0 0 5px rgba(64, 93, 230, 0.5);
    }

    .btn-info btn-sm text-white {
        background-color: #0095f6;
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-info btn-sm text-white:hover {
        background-color: #007bff;
        transform: scale(1.05);
    }

    .fade-in {
        animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>
</head>


<?php 
        if(isset($_SESSION['ticket'])){
            header("Location: http://localhost:3000/index.php");
        }
    ?>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-4 fade-in" style="width: 100%; max-width: 350px;">
            <div class="text-center mb-4">
                <h1 class="h3">Instagram</h1>
                <p class="text-muted">Sign up to see photos and videos from your friends.</p>
            </div>
            <button class="btn btn-info btn-sm text-white w-100 mb-3">Log in with Facebook</button>
            <div class="d-flex gap-2 align-items-center">
                <hr class="w-100">
                <p class="m-0 fw-semibold text-xsm">OR</p>
                <hr class="w-100">
            </div>
            <form action="./register-user.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control text-sm" name="m_mail" placeholder="Mobile Number or Email">
                </div>
                <div class="mb-3 position-relative">
                    <input type="password" class="form-control sign-pass text-sm" name="password"
                        placeholder="Password">
                    <i class="bi bi-eye-slash text-sm cursor-pointer show-pass-icon d-none position-absolute"
                        style="top:50%;right:10px;transform:translateY(-50%)"></i>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control text-sm" name="fullname" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control text-sm" name="username" placeholder="Username">
                </div>
                <small class="text-muted text-xsm d-block mb-3">People who use our service may have uploaded your
                    contact
                    information to Instagram. <a href="#">Learn More</a></small>
                <small class="text-muted text-xsm">By signing up, you agree to our <a href="#">Terms</a>, <a
                        href="#">Privacy
                        Policy</a>, and <a href="#">Cookies Policy</a>.</small>
                <button type="submit" class="btn btn-info btn-sm text-white w-100 mt-3">Sign up</button>
            </form>
        </div>
    </div>
    <div class="text-center mt-3 p-1 rounded-3 mx-auto text-sm bg-white shadow" style="max-width:350px">
        <div class="text-center mt-3">
            <p class="text-muted">Have an account? <a href="#">Log in</a></p>
        </div>
        <p class="text-muted">Get the app.</p>
    </div>

    <script>
    let sign_pass = document.querySelector('.sign-pass')
    let show_pass_icon = document.querySelector('.show-pass-icon')
    sign_pass.addEventListener('keyup', () => {
        if (sign_pass.value.length > 0) {
            show_pass_icon.classList.remove('d-none')
        } else {
            show_pass_icon.classList.add('d-none')

        }
    })

    show_pass_icon.addEventListener('click', () => {
        if (sign_pass.type == 'text') {
            sign_pass.type = 'password'

        } else {
            sign_pass.type = 'text'
        }


        if (show_pass_icon.classList.contains('bi-eye')) {
            show_pass_icon.classList.remove('bi-eye')
            show_pass_icon.classList.add('bi-eye-slash')
        } else {
            show_pass_icon.classList.add('bi-eye')
            show_pass_icon.classList.remove('bi-eye-slash')

        }




    })
    </script>

</body>

</html>