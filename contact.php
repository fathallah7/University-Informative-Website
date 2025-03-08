<?php
include 'includes/conn.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <title>Home</title>
</head>

<body>

    <?php
    include 'includes/header.php';
    ?>

    <?php
    include 'includes/msg.php';
    ?>

    <br>
    <br>
    <br>



    <div class="container">
        <div class="row justify-content-center bg-white rounded-4 shadow-lg py-5 gx-5 px-lg-5">
            <div class="col-md-6 text-center" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <h2 class="uf-ct-01-text-primary text-uppercase fw-bold mb-4" style="color: #3C6A77;">Contact Us</h2>
                <p class="mb-4">Or reach out manually to <a href="mailto:it-Library@gmail.com" class="text-decoration-none text-primary"> it-Library@gmail.com</a></p>
                <img src="assets/imgs/log.png" alt="IT Library Logo" class="uf-img-contact-form-01 pt-4 d-md-block d-none" style="width: 450px;">
            </div>
            <div class="col-md-6">
                <form action="back/handle_conact.php" method="post" class="p-3">
                    <div class="mb-4">
                        <label for="uf-imail" class="form-label fw-semibold">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light" style="color: #3C6A77;"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control border-start-0" id="uf-imail" aria-describedby="emailHelp" required placeholder="Enter Your Personal Email">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="uf-iname" class="form-label fw-semibold">Your name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light" style="color: #3C6A77;"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" class="form-control border-start-0" id="uf-iname" required placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="uf-itextarea" class="form-label fw-semibold">Your message</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light" style="color: #3C6A77;"><i class="fas fa-message"></i></span>
                            <textarea class="form-control border-start-0" name="message" id="uf-itextarea" rows="4" required placeholder="Enter Your Message"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg w-100 uf-ct-01-btn-primary" style="background-color: #3C6A77; color: white;">
                        Send Message <i class="fas fa-paper-plane ms-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </section>



    <br>
    <br>
    <br>



    <?php
    include 'includes/footer.php'
    ?>

</body>

</html>

























<!-- <section class="uf-contact-form-01 mx-auto py-5">
 -->