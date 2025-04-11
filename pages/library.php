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

        
.menu-section{
    margin-top: 100px;
    margin-bottom: 100px;
}

.menu-title {
    color: var(--main2-color);
    text-align: center;
    font-size: 38px;
    font-weight: 600;
    margin-bottom: 40px;
}


.menu-container {
        display: grid;
        gap: 2.5rem;
        grid-template-columns: repeat(2, 1fr);
        max-width: 80%;
        margin: 0 auto;
        justify-content: center;
}


.menu-card {
position: relative;
display: flex;
flex-direction: column;
background-color: #ffffff;
border-radius: 0.7rem;
box-shadow: 0 2px 4px rgba(3, 74, 40, 0.15);
padding: 0.5rem;
transition: 0.5s;
}
.menu-card:hover {
    transform: translateY(-30px);
}


.menu__img {  
width: 85px;
align-self: center;
margin-bottom: 1rem;
border-radius: 5px;
transition: 0.5s;
}
.menu__img:hover {
    transform: translateY(-30px);
}


.menu-name {
font-size: 15px;
font-weight: 600;
color: #000000;
}


.menu-detail {
margin-bottom: 0.5rem;
font-size: 13px;
color: rgb(163, 163, 163);
}

.menu-price {
    font-weight: 600;
    color: #000000;
    font-size: 13px;
    }


.menu__button {
position: absolute;
background-color: var(--main2-color);
color: #ffffff;
bottom: 0;
right: 0;
display: flex;
padding: 0.5rem 0.813rem;
border-radius: 0.5rem 0 0.5rem 0;
text-decoration: none;
}

.menu-more {
    margin-top: 40px;
    display: flex;
    justify-content: center;
}
.menu-more-button {
    text-decoration: none;
    background-color: var(--main2-color);
    color: white;
    padding: 8px 20px;
    border: #069C54;
    border-radius: 20px;
}

/*===== For PC =====*/
@media screen and (min-width: 1212px) {
.menu-container {
    grid-template-columns: repeat(4, 250px);
    column-gap: 4rem;
}
.menu-card {
    padding: 1.5rem;
}
.menu__img {
    width: 125px;
}
}

/*===== For PC =====*/
@media screen and (max-width: 1211px) and (min-width: 785px) {
.menu-container {
    grid-template-columns: repeat(3, 220px);
    column-gap: 4rem;
}

.menu-card {
    padding: 1.5rem;
}

.menu__img {
    width: 125px;
}
}

    </style>

</head>

<body>

<?php 
include '../includes/header.php';
require_once('../class/class.php');
?>

<section class="section">
<h2 class="section-title">Our Books</h2>

<div class="menu-container">

<div class="menu-card">
    <img src="../assets/imgs/py.png" alt="" class="menu__img">
    <h3 class="menu-name">Python From Zero</h3>
    <span class="menu-detail">In Stock</span>
    <span class="menu-price">$22.00</span>
    <a href="#menu" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
</div>


</div>

</section>

<script src="../assets/js/script.js"></script>

<?php 
include '../includes/footer.php';
?>

</body>

</html>
