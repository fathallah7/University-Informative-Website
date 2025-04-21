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
    require_once('../class/class.php');
    ?>

<section class="formAdd">

    <div class="container">
    <?php
    include 'includes/msg.php';
    ?>
        <div class="card">
            <div class="card-header">
                <span style="margin-right: 10px;">Add Event</span>
                <i class="fas fa-calendar-plus"></i>

            </div>
            <div class="card-body p-4">

                <form action="back/handle_events_admin.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="mb-4">
                        <label for="postTitle" class="form-label">Event Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Enter a classic title" required>
                    </div>

                    <div class="mb-4">
                        <label for="postDescription" class="form-label">Event Description</label>
                        <textarea name="content" class="form-control" id="postDescription" rows="2"  required></textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="postTitle" class="form-label">Start Date</label>
                        <input type="date" name="startDate" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="postTitle" class="form-label">End Date</label>
                        <input type="date" name="endDate" class="form-control" required>
                    </div>


                    <div class="mb-4">
                        <label for="postImage" class="form-label">Event Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-submit">Publish Event</button>
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
                        <h2><b>ُEvents</b><i style="margin-left: 10px;" class='bx bx-news'></i></h2>
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
                            <h3><b>Start Date</b></h3>
                        </th>
                        <th>
                            <h3><b>End Date</b></h3>
                        </th>
                        <th>
                            <h3><b>Action</b></h3>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <!-------------------------------------------START READ DATA----------------------------------------------->
                    <?php


                    $admin = new Admin();
                    $rowData = $admin->ShowEvents();
                    
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
                                <h4> <?php echo $row['start_date']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row['end_date']; ?> </h4>
                            </td>
                            <td>
                            <a href="back/handle_events_admin.php?idDel=<?php echo $row['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a> 
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-------------------------------------------END READ DATA----------------------------------------------->
                </tbody>
            </table>



            

        <!-------------------------------------------START TABLE----------------------------------------------->
        <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Event Users Registrations</b><i style="margin-left: 10px;" class='fas fa-user-tag'></i></h2>
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
                            <h3><b>Name</b></h3>
                        </th>
                        <th>
                            <h3><b>Email</b></h3>
                        </th>
                        <th>
                            <h3><b>Phone</b></h3>
                        </th>
                        <th>
                            <h3><b>Action</b></h3>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <!-------------------------------------------START READ DATA----------------------------------------------->
                    <?php


                    $admin2 = new Admin();
                    $rowData2 = $admin2->ShowEventUsers();
                    
                    while ($row2 = mysqli_fetch_assoc($rowData2)) {
                    ?>
                        <tr>
                            <td>
                                <h4> <?php echo $row2['id']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row2['name']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row2['email']; ?> </h4>
                            </td>
                            <td>
                                <h4> <?php echo $row2['phone']; ?> </h4>
                            </td>
                            <td>
                            <a href="back/handle_events_admin.php?idDelUser=<?php echo $row2['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a> 
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