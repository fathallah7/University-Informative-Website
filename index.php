<?php
require_once('class/class.php');
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

<style>
    body {
        background-color: #f8f9fa;
    }

    a {
        text-decoration: none;
    }

    .news-section {
        text-align: center;
        padding: 40px 20px;
    }

    .news-container {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 20px;
        padding-bottom: 20px;
        scrollbar-width: none;
    }

    .news-container::-webkit-scrollbar {
        display: none;
    }

    .news-card {
        flex: 0 0 auto;
        width: 320px;
        scroll-snap-align: start;
        border-radius: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        background: #fff;
        overflow: hidden;
    }

    .news-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .news-card .card-body {
        padding: 15px;
        text-align: left;
    }

    .news-card:hover {
        transform: translateY(-5px);
    }

    .pagination-dots {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .dot {
        width: 12px;
        height: 12px;
        margin: 0 5px;
        background-color: #ced4da;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .dot.active {
        background-color: #007bff;
    }

    .see-more-btn {
        margin-top: 20px;
    }
</style>

<body>

    <?php
    include 'includes/header.php'
    ?>


    <!-- Start Home -->
    <section class="home-section" id="home">
        <div class="background">
        </div>
        <div class="content">
            <img src="assets/imgs/log.png" alt="Logo" class="logo">
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



    <!-- Start About -->
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
    <!-- End About -->


    <!-- Start News -->
    <section class="news-section">
        <h2 class="section-title">Recent News</h2>
        <div class="container">
            <div class="news-section">
                <div class="news-container" id="newsContainer">
                    <?php
                    $rowData = Subscriber::ShowPosts();
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <a href="newsMoreinfo.php?id=<?php echo $row['id']; ?>">
                            <div class="news-card">
                                <img src="admin/back/<?php echo $row['image'] ?>" alt="News 1">
                                <div class="card-body">
                                    <h5><?php echo $row['title'] ?></h5>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="pagination-dots" id="paginationDots"></div>
                <button class="btn btn-outline-primary see-more-btn"><a href="news.php">See More ➜</a></button>
            </div>
        </div>
    </section>
    <!-- End News -->


    <!-- Start Services -->
    <div class="services" id="services">
        <div>
            <h2 class="section-title"> Our Programs </h2>
        </div>
        <div class="container">
            <div class="box-holder">
                <a href="books.php" class="box-link">
                    <div class="box">
                    <i class="fa-solid fa-laptop-code"></i>
                        <h2>Software</h2>
                        <p>Development, programming, databases, security, applications, frameworks, testing.</p>
                    </div>
                </a>
                <a href="courses.php" class="box-link">
                    <div class="box">
                        <i class="fa-solid fa-network-wired"></i>
                        <h2>Networking</h2>
                        <p>Protocols, security, cloud, infrastructure, administration, routing, wireless.</p>
                    </div>
                </a>
                <a href="translate.php" class="box-link">
                    <div class="box">
                    <i class="fa-solid fa-robot"></i>
                        <h2>AI</h2>
                        <p>Machine learning, deep learning, automation, algorithms, data science, robotics, NLP.</p>
                    </div>
                </a>
                <a href="testimonials.php" class="box-link">
                    <div class="box">
                    <i class="fa-solid fa-tower-cell"></i>
                        <h2>Communication</h2>
                        <p>Signals, transmission, modulation, wireless, fiber optics, protocols, networking.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Servcies -->


<script src="assets/js/script.js"></script>

    <?php
    include 'includes/footer.php'
    ?>

</body>

</html>