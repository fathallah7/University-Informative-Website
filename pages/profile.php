<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--========== File CSS =========-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--========== File BootStrap 5 ==========-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--========== Render Page ==========-->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!--=========== ICONS ===========-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>

    <style>
            .profile-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
        .btn-custom {
            background-color: #007bff;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <?php
    include '../includes/header.php';
    ?>



<div class="container mt-5 mb-5">
        <div class="profile-container">
            <div class="profile-header">
                <img src="../<?php echo $_SESSION['user_image'];?>" alt="Profile Picture" class="profile-img">
                <div>
                    <h5> <?php echo $_SESSION['user_firstName'] . " " . $_SESSION['user_lastName'] ; ?> </h5>
                    <small class="text-muted">Account Created: 2024-12-18 12:32:41</small>
                </div>
            </div>
            <div class="mt-3">
                <label class="form-label">Change Profile Picture</label>
                <input type="file" class="form-control">
            </div>
            <hr>
            <h6>General Information</h6>
            <form action="../back/handle_profile.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" value="<?php echo $_SESSION['user_firstName']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" value="<?php echo $_SESSION['user_lastName']; ?>">
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>">
                </div>
                <!-- <hr> -->
                <!-- <h6>Change Password</h6>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Old Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control">
                </div> -->
                <button type="submit" class="btn btn-custom w-100 text-white">Save</button>
            </form>
        </div>
    </div>



    <script src="../assets/js/script.js"></script>

    <?php
    include '../includes/footer.php'
    ?>

</body>

</html>