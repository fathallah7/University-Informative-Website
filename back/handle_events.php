<?php
session_start();
include '../includes/conn.php';
include '../class/class.php';

if (isset($_POST['submit'])) {

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $idEvent = $_POST['idEvent'];

        $register = new Subscriber();
        $registerStatus = $register->EventRegister($name, $email, $phone, $idEvent);

        if ($registerStatus === 'already_registered') {
            $_SESSION['error'] = "You already registered for this event.";
        } elseif ($registerStatus === 'success') {
            $_SESSION['msg'] = "You have successfully registered.";
        } else {
            $_SESSION['error'] = "Registration failed. Please try again.";
        }
        header("Location: ../pages/events.php");
        exit();
    } else {
        $_SESSION['error'] = "Enter all fields.";
        header("Location: ../pages/events.php");
        exit();
    }
}
