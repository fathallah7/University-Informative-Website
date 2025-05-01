<?php 
session_start();
include '../../includes/msg.php';
require_once('../../class/class.php');


if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['grade'])) {

        $firstName = $_POST['firstName'];
        $lastName  = $_POST['lastName'];
        $email     = $_POST['email'];
        $grade     = $_POST['grade'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format!";
            header("Location: ../accounts.php");
            exit();
        }

        $add = new Admin();
        $AddStudentResult = $add->AddStudent($firstName, $lastName, $email, $grade);

        if ($AddStudentResult) {
            $_SESSION['msg'] = "You Have Added A Student Successfully!";
            header("Location: ../accounts.php");
            exit();
        } else {
            $_SESSION['error'] = "An error occurred while adding the student.";
            header("Location: ../accounts.php");
            exit();
        }

    } else {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../accounts.php");
        exit();
    }
}




$id = $_GET['id'];

$admin = new Admin();
$doneDeleted  =  $admin->DeleteAccounts($id);

if ($doneDeleted) {
    $_SESSION['msg'] = "An Account Deleted";
    header("Location:../accounts.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../accounts.php");
    exit();
}
