<?php 
include '../../includes/msg.php';
require_once('../../class/class.php');

$id = $_GET['id'];

$doneDeleted  =  Admin::DeleteAccounts($id);

if ($doneDeleted) {
    $_SESSION['msg'] = "An Account Deleted";
    header("Location:../accounts.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../accounts.php");
    exit();
}
