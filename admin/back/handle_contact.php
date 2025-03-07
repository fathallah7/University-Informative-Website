<?php 
include '../includes/conn.php'
?>


<?php
            $id = $_GET['id'];
            $deleteResult = "DELETE FROM contact where id = $id";
            $result = mysqli_query($conn , $deleteResult);

            if ($result) {
                header("Location:../contact.php");
            }
            else {
                echo "Failed :" . mysqli_error($conn);
            }

        ?>