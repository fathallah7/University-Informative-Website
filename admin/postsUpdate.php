<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin</title>

    <!-- font awesome cdn link  -->
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
    include 'includes/header.php';
    ?>

    <section class="formAdd">

        <div class="container">

            <?php
            include 'includes/msg.php';
            include 'includes/conn.php' ;

                $id = $_SESSION['id_update'];
                $info = "SELECT * FROM `posts` WHERE `id` = $id";
                $row = mysqli_fetch_assoc(mysqli_query($conn , $info));    
            ?>

            <div class="card">
                <div class="card-header">
                    <span style="margin-right: 10px;">Update Post</span>
                    <i class="fas fa-feather-alt floating-icon"></i>

                </div>
                <div class="card-body p-4">

                    <form action="back/handle_posts_admin.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id_update']; ?>">
                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Post Title</label>
                            <input type="text" name="titleUpdate" class="form-control" id="postTitle" value="<?php echo $row['title']; ?>" required>
                        </div>

                        <div class="mb-4">
                            <label for="postDescription" class="form-label">Post Description</label>
                            <textarea name="contentUpdate" class="form-control" id="postDescription" rows="6" required><?php echo $row['content']; ?></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="update" class="btn btn-submit">Update Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>







    </section>

    <!-- custom js file link  -->
    <script src="assets/js/script.js"></script>


</body>

</html>