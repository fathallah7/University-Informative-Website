<?php 
session_start();
include '../../includes/msg.php';
require_once('../../class/class.php');



if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName'])  && !empty($_POST['email']) && !empty($_POST['grade']) ) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $grade = $_POST['grade'];


                $add = new Admin();
                $AddStudentResult = $add->AddStudent($firstName , $lastName , $email , $grade);

                if ($AddStudentResult) {
                        $_SESSION['msg'] = "You Have Added An Student Successfully!";
                        header("Location:../accounts.php");
                        exit();
                } else {
                    $_SESSION['error'] = "An Error";
                    header("Location:../accounts.php");
                    exit();
                }
            } 
            else {
                echo "Error: Failed to move uploaded file.";
            }
        }
        else {
            echo "Error:";
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
