<?php
session_start();
include '../includes/msg.php';


#############################################################################################################

//  Handle Signed Up

if (isset($_POST['signup'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once('../class/class.php');

        $done = Subscriber::register($first_name, $last_name, $email, $password);
        if ($done) {
            $_SESSION['msg'] = "You Have Signed Up ... Can Login Now";
            header("Location:../login.php");
            exit();
        } else {
            $_SESSION['error'] = "This Email Have Registered";
            header("Location:../register.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Enter All Information";
        header("Location:../register.php");
        exit();
    }
}


#############################################################################################################


// Handle Login

if (isset($_POST['signIn'])) {
    if ( !empty($_POST['email_login']) && !empty($_POST['password_login']) ) {
        $email = $_POST['email_login'];   
        $password = $_POST['password_login'];

        require_once('../class/class.php');

        $user = User::login($email , $password) ;
        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_firstName'] = $user['firstName'];
            $_SESSION['user_lastName'] = $user['lastName'];
            $_SESSION['user_image'] = $user['image'];

            if ($user['role'] === 'admin') {
                header("Location:../admin/index.php");
            }
            else {
                header("Location:../pages/index.php");
            }

        } 
        else {
            $_SESSION['error'] = "Wrong Informations";
            header("Location:../login.php");
            exit();
        }
    }
    else {
        $_SESSION['error'] = "Enter All Informations Please";
        header("Location:../login.php");
        exit();
    }
}


#############################################################################################################


