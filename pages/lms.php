<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--========== File CSS =========-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--========== File BootStrap 5 ==========-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--========== Render Page ==========-->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!--=========== ICONS ===========-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>

    <style>
        /* Container for the Coming Soon section */
        .coming-soon {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 40vh; */
            padding: 50px 0 100px 0;
            text-align: center;
            position: relative;
        }

        .coming-soon h2 {
            font-size: 50px;
            color: #2c3e50; /* Dark Gray-Blue for a professional look */
            font-family: 'Arial', sans-serif;
            font-weight: 900;
            letter-spacing: 3px;
            text-transform: uppercase;
            position: relative;
            animation: glowing 1.5s infinite alternate;
        }

        /* Animation for glowing effect */
        @keyframes glowing {
            0% {
                text-shadow: 0 0 5px #3498db, 0 0 10px #3498db, 0 0 15px #8e44ad;
            }
            50% {
                text-shadow: 0 0 10px #8e44ad, 0 0 20px #8e44ad, 0 0 30px #3498db;
            }
            100% {
                text-shadow: 0 0 5px #3498db, 0 0 10px #3498db, 0 0 15px #8e44ad;
            }
        }

    </style>
</head>
<body>

    <?php
    include '../includes/header.php';
    ?>

    <!-- Coming Soon Section -->


    <section class="section">
        <h2 class="section-title">LMS</h2>

            <div class="container">
            <section class="coming-soon">
        <div>
            <h2>Coming Soon</h2>
        </div>
    </section>
            </div>

    </section>

    <script src="../assets/js/script.js"></script>

    <?php
    include '../includes/footer.php';
    ?>

</body>
</html>
