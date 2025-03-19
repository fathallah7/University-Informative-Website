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
include 'includes/header.php'
?>


    <!-- --------------------------------------------------------------------------------------- -->
    <!--========== Home ==========-->
    <section class="home-section" id="home">

        <div class="background">
        </div>

        <div class="content">
            <img src="assets/imgs/log.png" alt="Logo"  class="logo">
            <div class="profile-content">
                <div>
                    <h1>Welcome To IT University</h1>
                </div>
            </div>

            <p>The IT library offers resources for learning and innovation in computer science and technology.</p>
            <a href="#about"><i class='bx bx-down-arrow-circle'></i> About Us</a>
        </div>

    </section>
    <!-- End Home -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- --------------------------------------------------------------------------------------- -->
    <!--========== ABOUT ==========-->
    <section class="about-section" id="about">

        <h2 class="section-title">About us</h2>

        <div class="container">

            <div class="about-data">
                <h2 class="about-title">Borg Al-Arab<br>Library </h2>
                <p class="about-description">Welcome to the Borg El Arab University Library, your trusted source for academic resources in various fields of study. Our library is designed to support students and faculty with access to a wide range of books, research papers, and educational materials. Whether you are a new student or a seasoned academic, we offer resources to help you succeed in your educational journey. At Borg El Arab University, we are committed to fostering knowledge and innovation for all learners.
                    .</p>
                <a href="#services" class="button">Our Services</a>
            </div>
            <div>
                <img src="assets/imgs/log.png" alt="" class="about-img" width="500px">
            </div>

        </div>
    </section>
    <!-- --------------------------------------------------------------------------------------- -->





    <!-- --------------------------------------------------------------------------------------- -->
    <!-- Start Services -->
    <div class="services" id="services">
        <div>
            <h2 class="section-title"  > Our Services </h2>
        </div>
        <div class="container">
            <div class="box-holder">
                <a href="books.php" class="box-link">
                    <div class="box">
                        <i class='bx bxs-book-alt'></i>
                        <h2>Book Sales</h2>
                        <p>Physical and digital books, Local and international shipping.</p>
                    </div>
                </a>
                <a href="courses.php" class="box-link">
                    <div class="box">
                        <i class='bx bx-code-block'></i>
                        <h2>Courses</h2>
                        <p>Training sessions or workshops based on book content.</p>
                    </div>
                </a>
                <a href="translate.php" class="box-link">
                    <div class="box">
                        <i class='bx bx-world'></i>
                        <h2>Translation Services</h2>
                        <p>Providing translated versions of essential programming books.</p>
                    </div>
                </a>
                <a href="testimonials.php" class="box-link">
                    <div class="box">
                        <i class='bx bxs-star-half'></i>
                        <h2>Reviews and Ratings</h2>
                        <p>A platform for readers to review and rate books.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Servcies -->
    <!-- --------------------------------------------------------------------------------------- -->




<?php 
include 'includes/footer.php'
?>

</body>

</html>