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
                    <span style="margin-right: 10px;">Add Student</span>
                    <i class='fas fa-user-check'></i>

                </div>
                <div class="card-body p-4">

                    <form action="back/handle_accounts_admin.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-6 mb-4 ">
                            <label for="postTitle" class="form-label">Student Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="Enter The First Name" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="postDescription" class="form-label">Student Last Name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Enter The Last Name" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="postDescription" class="form-label">Student Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter The Email" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="postCategory" class="form-label">Grade</label>
                            <select name="grade" class="form-select" required>
                                <option value="" disabled selected>Select Grade</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-submit">Add The Student</button>
                        </div>
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
                            <h2><b>Accounts</b><i style="margin-left: 10px;" class='bx bxs-user'></i> </h2>
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
                                <h3><b>Photo</b></h3>
                            </th>
                            <th>
                                <h3><b>Name</b></h3>
                            </th>
                            <th>
                                <h3><b>Email</b></h3>
                            </th>
                            <th>
                                <h3><b>Password</b></h3>
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
                        $rowData = $admin->ShowAccounts();

                        while ($row = mysqli_fetch_assoc($rowData)) {
                            if ($row['role'] == "subscriber") {
                        ?>
                                <tr>
                                    <td>
                                        <h4> <?php echo $row['id']; ?> </h4>
                                    </td>
                                    <td>
                                        <img src="../back/<?php echo $row['image']; ?>" alt="" class="avatar" width="50px">
                                    </td>
                                    <td>
                                        <h4> <?php echo $row['firstName'] . " " . $row['firstName']; ?> </h4>
                                    </td>
                                    <td>
                                        <h4> <?php echo $row['email']; ?> </h4>
                                    </td>
                                    <td>
                                        <h4> <?php echo $row['password']; ?> </h4>
                                    </td>
                                    <td><a href="back/handle_accounts_admin.php?id=<?php echo $row['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a></td>
                                </tr>
                        <?php
                            }
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