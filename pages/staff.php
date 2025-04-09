<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>

    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>

</head>

<body>

<?php 
include '../includes/header.php';
// require_once('../class/class.php');
?>



            <!-- Staff -->
        <section class="section">

            <h2 class="section-title">Our Team</h2>

            <div class="staff-section" id="staff">

                <p class="section-subtitle">Meet our team of professionals who are passionate about serving you</p>
                
                <div class="container">
                    <div class="card-container">

                        <?php
                        require_once('../class/class.php');
                        $subscriber = new Subscriber();
                        $rowData = $subscriber->ShowStaff();
                        while ($row = mysqli_fetch_assoc($rowData)) {
                        ?>

                        <div class="card">
                            <img class="staff-img" src="../admin/back/<?php echo $row['image']?> " alt="Staff Image">
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
                        ?>

                    </div>
                </div>
            </div>
        </section>


        <script src="../assets/js/script.js"></script>

<?php 
include '../includes/footer.php';
?>

</body>

</html>
