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




    <!-- Start About -->
    <section class="about-section" id="about">
        <h2 class="section-title">Communication Program</h2>
        <div class="container">
            <div class="about-data">
                <h2 class="about-title">Borg Al-Arab<br>Library </h2>
                <p class="about-description">Welcome to the Borg El Arab University Library, your trusted source for academic resources in various fields of study. Our library is designed to support students and faculty with access to a wide range of books, research papers, and educational materials. Whether you are a new student or a seasoned academic, we offer resources to help you succeed in your educational journey. At Borg El Arab University, we are committed to fostering knowledge and innovation for all learners.
                    .</p>
                <a href="#services" class="button">Our Services</a>
            </div>
            <div>
                <img src="assets/imgs/Communication.jpg" alt="" class="about-img" width="500px">
            </div>
        </div>
    </section>
    <!-- End About -->




    <!-- Staff -->
    <section class="section">
        <h2 class="section-title">Communication Team</h2>
        <div class="staff-section" id="staff">
            <div class="container">
                <div class="card-container">
                    <?php
                    require_once('class/class.php');

                    $rowData = Subscriber::ShowStaff();
                    while ($row = mysqli_fetch_assoc($rowData)) {
                        if ($row['category'] == "Communication") {
                    ?>
                            <div class="card">
                                <img class="staff-img" src="admin/back/<?php echo $row['image'] ?> " alt="Staff Image">
                                <h2> <?php echo $row['name'] ?> </h2>
                                <p> <?php echo $row['category'] ?> </p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="far fa-envelope"></i></a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/script.js"></script>

    <?php
    include 'includes/footer.php'
    ?>

</body>

</html>