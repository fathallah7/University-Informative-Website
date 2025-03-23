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
            font-family: 'Figtree', sans-serif;
            background-color: #f4f4f4;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .category {
            background-color:rgb(223, 223, 223);
            color: #1a1a1a;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 10px;
        }
        .card-title {
            font-weight: 800;
            font-size: 22px;
        }
        .card-text {
            font-weight: 600;
            color: #666666;
        }
        .date {
            font-size: 14px;
            color: #666666;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .btn-read-more {
            color: #3C6A77;
            border: solid 3px #3C6A77;
            font-weight: 600;
            padding: 8px 16px;
            margin-top: 15px;
        }
        .btn-read-more:hover {
            background-color: #3C6A77; 
            color: white;
        }
    </style>

<body>

<?php 
include 'includes/header.php'
?>




<div class="container">


<div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imgs/wall2.jpg" class="card-img-top" alt="Article illustration">
                    <div class="card-body">
                        <span class="category">Learning</span>
                        <p class="date">Published 21 Dec 2023</p>
                        <h2 class="card-title">HTML & CSS Foundations</h2>
                        <p class="card-text">These languages are the backbone of every website, defining structure, content, and presentation.</p>
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imgs/image.png" class="card-img-top" alt="Article illustration">
                    <div class="card-body">
                        <span class="category">Tech</span>
                        <p class="date">Published 15 Jan 2024</p>
                        <h2 class="card-title">JavaScript Basics</h2>
                        <p class="card-text">Learn the fundamentals of JS to add interactivity to your web projects.</p>
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imgs/log.png" class="card-img-top" alt="Article illustration">
                    <div class="card-body">
                        <span class="category">Design</span>
                        <p class="date">Published 10 Feb 2024</p>
                        <h2 class="card-title">UI/UX Principles</h2>
                        <p class="card-text">Explore the key concepts behind user-friendly design.</p>
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imgs/image.png" class="card-img-top" alt="Article illustration">
                    <div class="card-body">
                        <span class="category">Design</span>
                        <p class="date">Published 10 Feb 2024</p>
                        <h2 class="card-title">UI/UX Principles</h2>
                        <p class="card-text">Explore the key concepts behind user-friendly design.</p>
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>





<?php 
include 'includes/footer.php'
?>

</body>

</html>