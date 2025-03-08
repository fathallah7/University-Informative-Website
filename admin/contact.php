<?php
include 'includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Contact</title>
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

    <?php
    include 'includes/msg.php';
    ?>


<!-------------------------------------------START TABLE----------------------------------------------->
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Manage Students</b></h2>
                </div>
            </div>
        </div>


        <table class="table table-striped table-hover">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <!-------------------------------------------START READ DATA----------------------------------------------->
                    <?php
                            $sql = "SELECT * FROM contact";
                            $result = mysqli_query($conn , $sql);
                            while ($row = mysqli_fetch_assoc($result)) {     
                                ?>
                <tr>
                    <td>  <?php  echo $row['id'] ?>  </td>
                    <td><?php  echo $row['name'] ?></td>
                    <td><?php  echo $row['email'] ?></td>
                    <td><?php  echo $row['message'] ?></td>
                    <td><a href="back/handle_contact_admin.php?id=<?php echo $row['id']; ?>"><i class='bx bxs-comment-x'></i></a></td>
                </tr>
                <?php
            }
                ?>
                <!-------------------------------------------END READ DATA----------------------------------------------->
            </tbody>
        </table>





<script src="assets/js/script.js"></script>


</body>

</html>