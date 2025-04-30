<?php
include '../includes/conn.php';
?>


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
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>

    <?php
    include '../includes/msg.php';
    ?>

    <br>
    <br>
    <br>


    <div class="container">

        <div class="container">
            <div class="row justify-content-center bg-white rounded-4 shadow-lg py-5 gx-5 px-lg-5">
                <div class="col-md-6 text-center" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <h2 class="section-title">Contact Us</h2>
                    <p class="mb-4 mt-3">Or reach out manually to <a href="mailto:batu@gmail.com" class="text-decoration-none text-primary">batu@gmail.com</a></p>
                    <img src="../assets/imgs/log.png" alt="IT Library Logo" class="uf-img-contact-form-01 pt-4 d-md-block d-none" style="width: 450px;">
                </div>
                <div class="col-md-6">
                    <form action="../back/handle_conact.php" method="post" class="p-3">
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
                <!-- Google Map Section -->
<div class="col-12 mt-5">
    <h4 class="text-center mb-4">Our Location</h4>
    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.0138419738882!2d29.568878175271948!3d30.8582874745239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145f7d35b368ca83%3A0x6b44d7cb3b2a22f8!2z2KzYp9mF2LnYqSDYqNix2Kwg2KfZhNi52LHYqCDYp9mE2KrZg9mG2YjZhNmI2KzZitip!5e0!3m2!1sen!2seg!4v1746023718803!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

            </div>
        </div>
    </div>

    </section>




    <br>
    <br>
    <br>

    <script src="../assets/js/script.js"></script>

    <?php
    include '../includes/footer.php'
    ?>

</body>

</html>