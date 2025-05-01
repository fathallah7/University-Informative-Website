<?php
session_start();
include '../includes/msg.php';


#############################################################################################################


// Handle Login

session_start();
include '../includes/msg.php';

if (isset($_POST['signIn'])) {
    if (!empty($_POST['email_login']) && !empty($_POST['password_login'])) {
        
        $email = htmlspecialchars(trim($_POST['email_login']));
        $password = htmlspecialchars(trim($_POST['password_login']));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid Email Format";
            header("Location: ../login.php");
            exit();
        }

        require_once('../class/class.php');
        $user = User::login($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['grade'] = $user['grade'];
            $_SESSION['user_firstName'] = $user['firstName'];
            $_SESSION['user_lastName'] = $user['lastName'];
            $_SESSION['user_image'] = $user['image'];

            if ($user['role'] === 'admin') {
                header("Location: ../admin/index.php");
                exit();
            } else {
                header("Location: ../pages/index.php");
                exit();
            }

        } else {
            $_SESSION['error'] = "Wrong Email or Password";
            header("Location: ../login.php");
            exit();
        }

    } else {
        $_SESSION['error'] = "Please enter both email and password";
        header("Location: ../login.php");
        exit();
    }
}


#############################################################################################################


