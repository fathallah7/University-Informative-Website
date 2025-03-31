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
                <span style="margin-right: 10px;">Add Staff Members</span>

            </div>
            <div class="card-body p-4">

                <form action="back/handle_staff_admin.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="memberName" class="form-label">Member Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter The Name" required>
                    </div>

                    <div class="mb-4">
                        <label for="memberCategory" class="form-label">Member Category</label>
                        <select name="category" class="form-select" id="memberCategory" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="Software">Software</option>
                            <option value="Networking">Networking</option>
                            <option value="AI">AI</option>
                            <option value="Communication">Communication</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="memberImage" class="form-label">Member Image</label>
                        <input type="file" name="image" class="form-control" id="memberImage" accept="image/*" required>
                    </div>

                    <div class="mb-4">
                        <label for="memberCv" class="form-label">Member Cv</label>
                        <input type="text" name="cv" class="form-control" id="memberCv" placeholder="Enter Cv Link  (online pdf)" >
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
                        <h2><b>Staff</b><i style="margin-left: 10px;" class='bx bxs-user-badge'></i></h2>
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
                            <h3><b>Category</b></h3>
                        </th>
                        <th>
                            <h3><b>Cv</b></h3>
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
                    $rowData = Admin::ShowStaff();
                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <tr>
                            <td>
                                <h4> <?php echo $row['id']; ?> </h4>
                            </td>
                            <td>
                                <img class="avatar" src="back/<?php echo $row['image']; ?>" alt="Staff Image" width="50px">
                            </td>
                            <td>
                                <h4> <?php echo $row['name']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row['category']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row['cvLink']; ?> </h4>
                            </td>
                            <td>
                            <a href="back/handle_staff_admin.php?id=<?php echo $row['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a> 
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-------------------------------------------END READ DATA----------------------------------------------->
                </tbody>
            </table>


    </section>
    <script src="assets/js/script.js"></script>


</body>

</html>