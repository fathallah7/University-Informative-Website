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


    <!-- Start About Section -->
    <section class="program-details-section" id="about">
        <div class="program-details-container">
            <div class="program-details-text">
                <h2 class="section-title">Software Program</h2>
                <p class="program-details-description">
                The Software Engineering department focuses on the full lifecycle of software development — from problem analysis and system design to implementation and testing. Students learn multiple programming languages, software architecture, agile methodologies, version control systems, and DevOps practices. Graduates are capable of building scalable applications, whether web-based, mobile, or enterprise-level, and are prepared for careers in software development, QA, and systems analysis.
                </p>
                <a href="index.php" class="program-details-button"><i class="fas fa-house-user"></i> Home</a>
            </div>
            <div class="program-details-image-wrapper">
                <img src="../assets/imgs/software.jpg" alt="Library Image" class="program-details-image" />
            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Staff -->
    <section class="section">
        <h2 class="section-title">Software Team</h2>
        <div class="staff-section" id="staff">
            <div class="container">
                <div class="card-container">
                    <?php
                    require_once('../class/class.php');

                    $subscriber = new Subscriber();
                    $rowData = $subscriber->ShowStaff();

                    while ($row = mysqli_fetch_assoc($rowData)) {
                        if ($row['category'] == "Software") {
                    ?>
                            <div class="card">
                                <img class="staff-img" src="../admin/back/<?php echo $row['image'] ?> " alt="Staff Image">
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

    <script src="../assets/js/script.js"></script>

    <?php
    include '../includes/footer.php'
    ?>

</body>

</html>