<?php 
include '../includes/conn.php';
session_start();
?>


<?php
            $id = $_GET['id'];
            $deleteResult = "DELETE FROM contact where id = $id";
            $result = mysqli_query($conn , $deleteResult);

            if ($result) {
                $_SESSION['msg'] = "An Message Deleted";
                header("Location:../contact.php");
                exit();
            }
            else {
                $_SESSION['error'] = "Failed :" . mysqli_error($conn);
                header("Location:../contact.php");
                exit();
            }

        ?>