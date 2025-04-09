<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Details</title>
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Icons -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <?php
                require_once('../class/class.php');
                if (isset($_GET['id'])) {
                    $postID = $_GET['id'];

                    $subscriber = new Subscriber();
                    $result = $subscriber->ShowPostsMoreInfo($postID);

                    if ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
                            <img src="../admin/back/<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="Article illustration" style="max-height: 400px; object-fit: cover;">
                            <div class="card-body p-4">
                                <span class="badge bg-primary mb-2"> <?php echo $row['category']; ?> </span>
                                <p class="text-muted small mb-2"> <i class="fas fa-calendar-alt"></i> Published: <?php echo $row['date']; ?> </p>
                                <h1 class="card-title mb-3"> <?php echo $row['title']; ?> </h1>
                                <p class="card-text lead"> <?php echo nl2br($row['content']); ?> </p>
                            </div>
                        </div>

                <?php
                    } else {
                        echo "<div class='container text-center my-5'><h2 class='text-danger'>Post not found!</h2></div>";
                    }
                } else {
                    echo "<div class='container text-center my-5'><h2 class='text-danger'>Invalid request!</h2></div>";
                }
                ?>
            </div>

            <div class="text-center mt-4">
                <a href="news.php" class="btn btn-secondary">
                    <i class="fas fa-newspaper"></i> Back To News
                </a>
            </div>

        </div>
    </div>

    <script src="../assets/js/script.js"></script>
    <?php include '../includes/footer.php'; ?>
</body>

</html>