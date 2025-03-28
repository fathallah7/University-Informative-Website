<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>

    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>

</head>

<body>

<?php 
include 'includes/header.php';
require_once('class/class.php');
?>


    <!-- --------------------------------------------------------------------------------------- -->
    <!-- FeedBack -->


    <div class="testimonials-section" id="testimonials-section">
        <div class="container" id="container">
            <div class="section-header">
                <h2 class="section-title">What Our Students Say</h2>
            </div>

            <!-- Add Review Button -->
            <div class="add-review">
                <button onclick="openReviewForm()">
                    <i class="fas fa-plus"></i> Add Your Review
                </button>
            </div>

            <!-- Review Form -->
            <div id="reviewForm" class="review-form-overlay">
                <div class="review-form">
                    <span class="close-form" onclick="closeReviewForm()">&times;</span>
                    <h3>Share Your Feedback</h3>
                    <form action="../back/handle_testimonials.php" method="post">
                        <textarea name="text" placeholder="Write your review here..." required></textarea>
                        <button type="submit" name="send">Submit Review</button>
                    </form>
                </div>
            </div>


            <!-- Reviews Grid -->
            <div class="reviews-grid" id="card">

                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <img src="assets/imgs/log.png" alt="User">
                            <div class="reviewer-info">
                                <h4>xxxxxxxxx</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            ddddddddddddddddddddddddddddddddddddd
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <!-- End FeedBack -->
    <!-- --------------------------------------------------------------------------------------- -->






        <script src="assets/js/script.js"></script>

<?php 
include 'includes/footer.php';
?>

</body>

</html>
