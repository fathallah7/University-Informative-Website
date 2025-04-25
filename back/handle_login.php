<?php
session_start();
include '../includes/msg.php';


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
            $_SESSION['grade'] = $user['grade'];
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


