<?php
session_start();
require_once('../class/class.php');
include '../includes/msg.php';
?>


<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) || !empty($_FILES['image']['name'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $imagePath = $_SESSION['user_image'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            header("Location: ../pages/profile.php");
            exit();
        }

        if (!empty($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $uploadDir = 'uploads/profile/';
        $imagePath = $uploadDir . basename($imageName);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $imageDone = move_uploaded_file($imageTmpName, $imagePath);
        }

        $subscriber = new Subscriber();
        $done = $subscriber->ProfileUpdate($_SESSION['user_id'], $firstName, $lastName, $email, $imagePath);

        if ($done) {

            $_SESSION['user_firstName'] = $firstName;
            $_SESSION['user_lastName'] = $lastName;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_image'] = $imagePath;


            $_SESSION['msg'] = "You Have Updated Your Profile";
            header("Location:../pages/profile.php");
            exit();
        } else {
            $_SESSION['error'] = "An Error";
            header("Location:../pages/profile.php");
            exit();
        }
    }
}

?>