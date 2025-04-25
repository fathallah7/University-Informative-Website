<?php
require_once('../class/class.php');
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

<style>
    body {
        background-color: #f8f9fa;
    }

    a {
        text-decoration: none;
    }

    .news-section {
        text-align: center;
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
    include '../includes/header.php'
    ?>


    <!-- Start Home -->
    <section class="home-section" id="home">
        <div class="background">
        </div>
        <div class="content">
            <img src="../assets/imgs/log.png" alt="Logo" class="logo">
            <div class="profile-content">
                <div>
                    <h1>Welcome To Information Technology University </h1>
                </div>
            </div>
            <p>The Faculty of Information Technology is a hub for innovation, creativity, and digital excellence.</p>
            <a href="#about"><i class='bx bx-down-arrow-circle'></i> About Us</a>
        </div>
    </section>
    <!-- End Home -->


    <!-- Start About -->
    <section class="about-section" id="about">
        <div class="section">
            <div class="container">
                <h2 class="section-title">Discover Our University</h2>
                <div class="about-content">
                    <div class="about-text">
                        <h2 class="about-title">Information Technology<span>University</span></h2>
                        <div class="about-description">
                            <p>Welcome to the Information Technology, <br> Our programs are designed to equip students with the skills and knowledge needed :</p>
                            <ul class="features-list">
                                <li><i class="fas fa-code"></i> Software Engineering </li>
                                <li><i class="fas fa-robot"></i> AI </li>
                                <li><i class="fas fa-network-wired"></i> Networking </li>
                                <li><i class="fas fa-neuter"></i> Communication Systems </li>
                            </ul>
                            <p>We serve both new students and seasoned academics with resources designed to empower your educational journey and foster innovation.</p>
                        </div>
                        <div class="about-actions">
                            <a href="#services" class="btn btn-primary" style="background-color: #3C6A77;">
                                <i class="fas fa-book-open mr-2"></i> About Programs
                            </a>
                            <a href="#" class="btn btn-outline">
                                <i class="fas fa-map-marker-alt mr-2"></i> Visit Us
                            </a>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="../assets/imgs/log.png" alt="Borg Al-Arab University Library" class="library-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->


    <!-- Start News -->
    <section class="news-section">
        <div class="section">
            <h2 class="section-title">Recent News</h2>
            <div class="container">
                <div class="news-section">
                    <div class="news-container" id="newsContainer">
                        <?php

                        $subscriber = new Subscriber();
                        $rowData = $subscriber->ShowPosts();

                        while ($row = mysqli_fetch_assoc($rowData)) {
                        ?>
                            <a href="newsMoreinfo.php?id=<?php echo $row['id']; ?>">
                                <div class="news-card">
                                    <img src="../admin/back/<?php echo $row['image'] ?>" alt="News 1">
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
        </div>
    </section>
    <!-- End News -->


    <!-- Start Services -->
    <div class="services" id="services">
        <div class="section">
            <div>
                <h2 class="section-title"> Our Programs </h2>
            </div>
            <div class="container">
                <div class="box-holder">
                    <a href="software-programe.php" class="box-link">
                        <div class="box">
                            <i class="fa-solid fa-laptop-code"></i>
                            <h2>Software</h2>
                            <p>Development, programming, databases, security, applications, frameworks, testing.</p>
                        </div>
                    </a>
                    <a href="ai-program.php" class="box-link">
                        <div class="box">
                            <i class="fa-solid fa-robot"></i>
                            <h2>AI</h2>
                            <p>Machine learning, deep learning, automation, algorithms, data science, robotics, NLP.</p>
                        </div>
                    </a>
                    <a href="networking-program.php" class="box-link">
                        <div class="box">
                            <i class="fa-solid fa-network-wired"></i>
                            <h2>Networking</h2>
                            <p>Protocols, security, cloud, infrastructure, administration, routing, wireless.</p>
                        </div>
                    </a>
                    <a href="communication-program.php" class="box-link">
                        <div class="box">
                            <i class="fa-solid fa-tower-cell"></i>
                            <h2>Communication</h2>
                            <p>Signals, transmission, modulation, wireless, fiber optics, protocols, networking.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Servcies -->


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../assets/js/script.js"></script>

    <?php
    include '../includes/footer.php'
    ?>

</body>

</html>