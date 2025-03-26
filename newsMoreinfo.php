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


<body>

<?php 
include 'includes/header.php';
?>


<?php
require_once('class/class.php');

if (isset($_GET['id'])) {
    $postID = intval($_GET['id']);
    $result = Subscriber::ShowPostsMoreInfo($postID);
    if ($row = mysqli_fetch_assoc($result)) {
?>

<div class="container my-5">
    <div class="card">
        <img src="admin/back/<?php echo $row['image']; ?>" class="card-img-top" alt="Article illustration" width="500px">
        <div class="card-body">
            <span class="category"><?php echo $row['category']; ?></span>
            <p class="date">Published: <?php echo $row['date']; ?></p>
            <h1 class="card-title"><?php echo $row['title']; ?></h1>
            <p class="card-text"><?php echo nl2br($row['content']); ?></p>
        </div>
    </div>
</div>

<?php
    } else {
        echo "<h2>Post not found!</h2>";
    }
} else {
    echo "<h2>Invalid request!</h2>";
}
?>


<script src="assets/js/script.js"></script>

<?php 
include 'includes/footer.php'
?>

</body>

</html>