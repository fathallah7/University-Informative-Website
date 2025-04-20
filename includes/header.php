<?php 
session_start();
?>
<!-- Start Header-Top -->
<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="../assets/imgs/log.png" alt="logo">
            </a>
        </div>

        <form>
            <input class="input" type="search" placeholder="What are you looking for?">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>

        <div class="infor">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<!-- Start Header-Bottom -->
<div class="header-bottom">
    <div class="container">
        <nav>
            <i class="fa-solid fa-bars toggle-menu"></i>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="library.php">Library</a></li>
                <li><a href="staff.php">Staff</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="testimonials.php">LMS</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="icons">
            <?php if (isset($_SESSION['user'])): ?>
                <a href="profile.php" class="user"><i class="fa-solid fa-user"></i></a>
                <a href="cart.php" class="user"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="../back/handle_logout.php" class="user"><i class="fa-solid fa-right-from-bracket"></i></a>
            <?php else: ?>
                <a href="../login.php" class="user">
                    <i class="fa-solid fa-user"></i>
                    <span>Login</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End Header -->
