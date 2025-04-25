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

    <style>
        /* Main Container Styling */
        .containerL {
            max-width: 1200px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        /* Box Area */
        .box-area {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            background-color: #fff;
        }

        /* Left Box */
        .left-box {
            background-color: #3C6A77;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
        }

        .left-box img {
            width: 100%;
            max-width: 400px;
        }

        /* Right Box */
        .right-box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 40px;
            flex-direction: column;
        }

        .header-text h2 {
            font-size: 32px;
            font-weight: 600;
            color: #2C3E50;
            margin-bottom: 10px;
        }

        .header-text p {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        /* Form Input Styling */
        .form-control {
            border-radius: 30px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 16px;
            background-color: #f4f6f7;
            transition: border 0.3s ease-in-out;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #3498db;
        }

        /* Submit Button Styling */
        .btn {
            border-radius: 30px;
            font-size: 16px;
            padding: 12px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .box-area {
                flex-direction: column;
                padding: 0;
            }

            .left-box,
            .right-box {
                flex: 1 1 100%;
                padding: 20px;
            }

            .left-box img {
                width: 100%;
                height: auto;
            }
        }
    </style>

</head>

<body>

    <?php
    session_start();
    include 'includes/msg.php';
    ?>

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

    <br>
    <br>
    <br>

    <div class="container d-flex justify-content-center align-items-center mt-4 mb-4">
        <div class="row border rounded-5 p-0 bg-white box-area">

            <!-- Left Box -->
            <div class="col-md-6 left-box">
                <div class="logoLogin">
                    <img src="assets/imgs/log.png" alt="Logo">
                </div>
            </div>

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="header-text mb-4">
                    <h2 class="section-title">Welcome Back</h2>
                </div>

                <form action="back/handle_login.php" method="post">
                    <!-- Email Input -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Email address" name="email_login" required>
                    </div>

                    <!-- Password Input -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="password_login" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="input-group mb-3 mt-4">
                        <input type="submit" value="Login" class="btn btn-lg btn-primary w-100" name="signIn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="my-" style="background-color: #3C6A77; ">
        <footer class="text-center text-lg-start   pt-0">

            <!-- Copyright -->
            <div class="text-center p-3 border-top border-white">
                © 2025 Copyright:
                <a class="text-white" href="#" style="text-decoration: none;">it-Library.com</a>
            </div>
            <!-- Copyright -->
        </footer>

        <script src="assets/js/script.js"></script>


</body>

</html>