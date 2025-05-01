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
    ?>
        <div class="card">
            <div class="card-header">
                <span style="margin-right: 10px;">Add New Post</span>
                <i class="fas fa-feather-alt floating-icon"></i>

            </div>
            <div class="card-body p-4">

                <form action="back/handle_posts_admin.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Enter a classic title" required>
                    </div>

                    <div class="mb-4">
                        <label for="postDescription" class="form-label">Post Description</label>
                        <textarea name="content" class="form-control" id="postDescription" rows="6" placeholder="Craft your story here..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="postImage" class="form-label">Post Image</label>
                        <input type="file" name="image" class="form-control" id="postImage" accept="image/*" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-submit">Publish Post</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



        <!-------------------------------------------START TABLE----------------------------------------------->
        <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Posts</b><i style="margin-left: 10px;" class='bx bx-news'></i></h2>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>
                            <h3><b>ID</b></h3>
                        </th>
                        <th>
                            <h3><b>Title</b></h3>
                        </th>
                        <th>
                            <h3><b>Date</b></h3>
                        </th>
                        <th>
                            <h3><b>Action</b></h3>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <!-------------------------------------------START READ DATA----------------------------------------------->
                    <?php
                    require_once('../class/class.php');

                    $admin = new Admin();
                    $rowData = $admin->ShowPosts();
                    
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <tr>
                            <td>
                                <h4> <?php echo $row['id']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row['title']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row['date']; ?> </h4>
                            </td>
                            <td>
                            <a href="back/handle_posts_admin.php?id=<?php echo $row['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a> 
                            <a href="back/handle_posts_admin.php?id_update=<?php echo $row['id']; ?>"><i style="color:rgb(12, 173, 0); " class='bx bx-edit-alt'></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-------------------------------------------END READ DATA----------------------------------------------->
                </tbody>
            </table>


    </section>

    <!-- custom js file link  -->
    <script src="assets/js/script.js"></script>


</body>

</html>