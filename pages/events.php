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


                <div class="container my-5">

                <div class="event-card">
    <img src="../assets/imgs/college2.png" alt="Event">

    <div class="event-details w-100">
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">From: 2025-06-01 → To: 2025-06-03</small>
            <span class="badge bg-success px-3 py-2 rounded-pill">
                <i class="fa fa-users me-1"></i> 124 Registered
            </span>
        </div>

        <h4 class="mt-2">AI & Future Tech Conference 2025</h4>
        <p>
            Join us in an inspiring 3-day event where tech leaders and enthusiasts gather to explore the latest in Artificial Intelligence, Innovation, and Smart Solutions.
        </p>

        <button class="register-btn mt-2">
            <i class="fa fa-edit me-1"></i> Register
        </button>
    </div>
</div>


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