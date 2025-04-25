<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home - Admin</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!--========== File BootStrap 5 ==========-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!--========== File CSS =========-->
   <link rel="stylesheet" href="assets/css/style.css">

   <!--========== Render Page ==========-->
   <link rel="stylesheet" href="assets/css/normalize.css">

   <!--=========== ICONS ===========-->
   <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
</head>

<style>
   a {
      text-decoration: none;
   }
</style>

<body>
   <?php
   include 'includes/header.php'
   ?>

   <!-- Landing Section -->
   <div class="landing-page">
      <h1>Welcome Admin!</h1>
      <p>We are excited to have you here! As the admin, you can manage all aspects of the university's website, from posts to events and more. Get started now!</p>
      <img src="assets/imgs/log.png" alt="Admin Dashboard Image">
      <br><br>
      <a href="../pages/index.php" class="btn-welcome" target="_blank">Go to User Website</a>
   </div>

   <!-- custom js file link -->
   <script src="assets/js/script.js"></script>

</body>

</html>