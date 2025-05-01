<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon" />

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/normalize.css" />

    <style>
        body {
            background: linear-gradient(135deg, #3C6A77, #2c3e50);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .header-top .logo img {
            width: 50px;
        }

        .header-top form {
            position: relative;
            max-width: 300px;
        }

        .header-top form .input {
            padding: 7px 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
            width: 100%;
            padding-right: 35px;
        }

        .header-top form i {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            color: #888;
        }

        .header-top .infor a {
            color: #3C6A77;
            margin-left: 10px;
            font-size: 16px;
        }

        .login-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: flex;
            flex-direction: row;
            max-width: 900px;
            width: 100%;
        }

        .login-left {
            background-color: #3C6A77;
            padding: 30px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-left img {
            max-width: 100%;
        }

        .login-right {
            padding: 40px 30px;
            flex: 1;
        }

        .login-right h2 {
            font-size: 28px;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            background-color: #f4f6f7;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: none;
        }

        .btn-primary {
            border-radius: 30px;
            padding: 12px;
            background-color: #3498db;
            border: none;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #3C6A77;
            color: white;
            text-align: center;
            padding: 10px;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
            }

            .login-left {
                display: none;
            }
        }
    </style>
</head>

<body>

    <?php session_start(); ?>

    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="assets/imgs/log.png" alt="logo" /></a>
            </div>

            <form>
                <input class="input" type="search" placeholder="Search" />
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>

            <div class="infor">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <?php include 'includes/msg.php'; ?>

    <div class="login-wrapper">
        <div class="login-card">
            <!-- Left Side -->
            <div class="login-left">
                <img src="assets/imgs/log.png" alt="Login Image" />
            </div>

            <!-- Right Side -->
            <div class="login-right">
                <h2>Welcome Back</h2>

                <form action="back/handle_login.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Email address" name="email_login" required />
                    </div>

                    <div class="mb-4">
                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="password_login" required />
                    </div>

                    <input type="submit" value="Login" class="btn btn-primary w-100" name="signIn" />
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div>© 2025 Copyright: <a class="text-white" href="#" style="text-decoration: none;">it-Library.com</a></div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>

</html>
