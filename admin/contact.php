<?php
session_start();
?>

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
                    <h2><b>Contact Messages</b> <i style="margin-left: 10px;" class='bx bxs-message-detail'></i> </h2>
                </div>
            </div>
        </div>


        <table class="table table-striped table-hover">
            
            <thead>
                <tr>
                    <th><h3><b>ID</b></h3></th>
                    <th><h3><b>Name</b></h3></th>
                    <th><h3><b>Email</b></h3></th>
                    <th><h3><b>Message</b></h3></th>
                    <th><h3><b>Action</b></h3></th>
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
                    <td><h4><?php  echo $row['id'] ?></h4></td>
                    <td><h4><?php  echo $row['name'] ?></h4></td>
                    <td><h4><?php  echo $row['email'] ?></h4></td>
                    <td><h4><?php  echo $row['message'] ?></h4></td>
                    <td><a href="back/handle_contact_admin.php?id=<?php echo $row['id']; ?>"><i style="color: #a30000; " class='bx bxs-trash-alt'></i></a></td>
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