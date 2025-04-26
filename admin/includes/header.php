<header class="header">

   <section class="flex">

      <a href="index.php" class="logo">Admin Panel</a>

      <form action="#" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <!-- <div id="user-btn" class="fas fa-user"></div> -->
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>


   </section>

   <div class="side-bar">

      <div id="close-btn">
         <i class="fas fa-times" style="color: #3C6A77;"></i>
      </div>

      <div class="profile">
         <img src="assets/imgs/log.png" class="image" alt="">
         <h3 class="name">Admin</h3>
         <a href="#" class="btn">Admin</a>
      </div>

      <nav class="navbar">
         <a href="index.php"><i class="fas fa-home"></i><span>Main Page</span></a>
         <a href="posts.php"><i class='bx bxs-image-add' ></i><span>Posts - News</span></a>
         <a href="events.php"><i class='fas fa-calendar-plus' ></i><span>Events - Ev</span></a>
         <a href="library.php"><i class='bx bxs-book-bookmark' ></i><span>Library</span></a>
         <a href="staff_univ.php"><i class='bx bxs-user-badge' ></i><span>University Staff</span></a>
         <a href="accounts.php"><i class='bx bxs-user'></i><span>Accounts</span></a>
         <a href="contact.php"><i class='bx bx-support'></i><span>Contact</span></a>
      </nav>

   </div>