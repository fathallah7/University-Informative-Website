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

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "The email address is not valid.";
            header("Location: ../pages/contact.php");
            exit();
        }

        $insertMessage = "INSERT INTO `contact` (`name`, `email`, `message`)
                        VALUES ('$name','$email','$message')";
        $sendData = mysqli_query($conn, $insertMessage);

        if ($sendData) {
            $_SESSION['msg'] = "Your Message Sent";
            header("Location: ../pages/contact.php");
            exit();
        } else {
            $_SESSION['error'] = "Your Message Not Sent";
            header("Location: ../pages/contact.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Enter All Fields";
        header("Location: ../pages/contact.php");
        exit();
    }
}



?>