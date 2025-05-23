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

        <h2 class="section-title">Our Staff</h2>

        <!-- Filter Section -->
        <div class="filter-section">
            <select id="categoryFilter" class="category-filter">
                <option value="all">ِAll</option>
                <option value="software">Software</option>
                <option value="networking">Networking</option>
                <option value="ai">AI</option>
                <option value="communication">Communication</option>
            </select>
        </div>

        <div class="staff-section" id="staff">
            <div class="container">
                <div class="card-container">

                    <?php
                    require_once('../class/class.php');
                    $subscriber = new Subscriber();
                    $rowData = $subscriber->ShowStaff();
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>

                        <div class="card" data-category="<?php echo strtolower($row['category']); ?>">
                            <img class="staff-img" src="../admin/back/<?php echo $row['image'] ?>" alt="Staff Image">
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

    <script>
        // Staff Filter
        document.getElementById("categoryFilter").addEventListener("change", function() {
            var selectedCategory = this.value.toLowerCase();
            var staffCards = document.querySelectorAll(".card");

            staffCards.forEach(function(card) {
                var cardCategory = card.getAttribute("data-category");

                if (selectedCategory === "all" || cardCategory === selectedCategory) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        });
    </script>

    <?php
    include '../includes/footer.php';
    ?>

</body>

</html>