<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== File CSS =========-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--========== File BootStrap 5 ==========-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--========== Render Page ==========-->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!--=========== ICONS ===========-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>



    <!-- Start Header-Top -->
    <div class="header-top">
        <div class="container">

            <div class="logo">
                <a href="#"><img src="assets/imgs/log.png" alt="logo"></a>
            </div>

            <form>
                <input class="input" type="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
            <div class="infor">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
        </div>
    </div>
    <!-- End Header -->


<?php  
include 'includes/msg.php';
?>

<br>
<br>


    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5 pt-5 pb-5 ">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #3C6A77;">
                <div class="logoLogin">
                    <img src="assets/imgs/log.png" class="" style="width: 400px;">
                </div>
            </div>
            <!-------------------------- Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello</h2>
                        <p>Sign Up NOW We Waiting you.</p>
                    </div>

                    <form action="back/handle_login.php" method="post" >
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="first_name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                        </div>
                        <div class="input-group  mt-4">
                            <input type="submit" value="Sign Up" class="btn btn-lg btn-primary w-100 fs-6" name="signup">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<br>
<br>
<br>


    <div class="my-" style="background-color: #3C6A77; ">
        <footer class="text-center text-lg-start  mt-xl-1 pt-0">
            <div class="text-center p-3 border-top border-white">
                © 2025 Copyright:
                <a class="text-white" href="#" style="text-decoration: none;">it-Library.com</a>
            </div>
        </footer>
    </div>


</body>
</html>