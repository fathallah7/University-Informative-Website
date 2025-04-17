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
        .program-details-section {
        padding: 80px 20px;
        /* background: linear-gradient(135deg, #f0f4ff, #ffffff); */
        display: flex;
        justify-content: center;
    }

    .program-details-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        align-items: center;
        max-width: 1200px;
        width: 100%;
        gap: 40px;
        /* background: rgba(255, 255, 255, 0.25); */
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .program-details-text {
        color: #1e1e2f;
    }

    .program-details-heading {
        font-size: 36px;
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .program-details-heading span {
        color: #0066ff;
    }

    .program-details-description {
        font-size: 16px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .program-details-button {
        display: inline-block;
        padding: 14px 28px;
        background: #0066ff;
        color: #fff;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .program-details-button:hover {
        background: #004fcc;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.3);
    }

    .program-details-image-wrapper {
        text-align: center;
    }

    .program-details-image {
        width: 100%;
        max-width: 500px;
        border-radius: 16px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .program-details-heading {
            font-size: 28px;
            text-align: center;
        }

        .program-details-description {
            text-align: center;
        }

        .program-details-button {
            display: block;
            margin: 0 auto;
        }

        .program-details-image-wrapper {
            text-align: center;
        }
    }
</style>

<body>

    <?php
    include '../includes/header.php';
    ?>



    <!-- Start About Section -->
    <section class="program-details-section" id="about">
        <div class="program-details-container">
            <div class="program-details-text">
                <h2 class="section-title" style="text-align:left;">Software Program</h2>
                <!-- <h2 class="program-details-heading">Borg Al-Arab<br><span>Library</span></h2> -->
                <p class="program-details-description">
                    Welcome to the Borg El Arab University Library, your trusted source for academic resources in various fields of study. Our library is designed to support students and faculty with access to a wide range of books, research papers, and educational materials. Whether you are a new student or a seasoned academic, we offer resources to help you succeed in your educational journey.
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