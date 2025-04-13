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
    <link rel="shortcut icon" href="../assets/../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
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
include '../includes/msg.php';
require_once('../class/class.php');
?>

<section class="section">
<h2 class="section-title">Our Books</h2>

<div class="menu-container">

        <?php
        $subscriber = new Subscriber();
        $rowData = $subscriber->ShowBooks();
        
        while ($row = mysqli_fetch_assoc($rowData)) {
        ?>

<div class="menu-card">
    <img src="../admin/back/<?php echo $row['image']; ?>" alt="" class="menu__img">
    <h3 class="menu-name"><?php echo $row['title']; ?></h3>
    <span class="menu-detail"><?php echo $row['status']; ?></span>
    <span class="menu-price"><?php echo $row['price']; ?>$</span>
    <a href="../back/handle_library.php?book_id=<?php echo $row['id'] ?>" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
</div>
<?php } ?>


</div>

</section>

<script src="../assets/js/script.js"></script>

<?php 
include '../includes/footer.php';
?>

</body>

</html>
