<?php
include '../includes/conn.php';
session_start();
?>


<?php

if (isset($_POST['submit'])) {

    if (!empty($_POST['email'])  && !empty($_POST['name'])  && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $insertMessage = "INSERT INTO `contact` (`name`, `email`, `message`)
                        VALUES ('$name','$email','$message')";
        $sendData = mysqli_query($conn, $insertMessage);

        if ($sendData) {
            $_SESSION['msg'] = "Your Message Sent";
            header("Location: ../contact.php");
            exit();
        } else {
            $_SESSION['error'] = "Your Message Not Sent";
            header("Location: ../contact.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Enter All Fields";
        header("Location: ../contact.php");
        exit();
    }
}



?>