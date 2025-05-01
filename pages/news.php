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
    require_once('../class/class.php');
    ?>

    <section class="section">
        <h2 class="section-title">What’s New</h2>
        <div class="news">
            <div class="container my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    $subscriber = new Subscriber();
                    $rowData = $subscriber->ShowPosts();

                    while ($row = mysqli_fetch_assoc($rowData)) {
                        $excerpt = mb_substr($row['content'], 0, 150, 'UTF-8') . '...';
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="../admin/back/<?php echo $row['image']; ?>" class="card-img-top" alt="Article illustration">
                                <div class="card-body">
                                    <p class="date">Published <?php echo $row['date']; ?></p>
                                    <h2 class="card-title"> <?php echo $row['title']; ?> </h2>
                                    <p class="card-text"> <?php echo $excerpt; ?> </p>
                                    <a href="newsMoreinfo.php?id=<?php echo $row['id']; ?>" class="btn btn-read-more">Read More</a>
                                </div>
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