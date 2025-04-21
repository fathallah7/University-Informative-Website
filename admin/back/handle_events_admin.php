<?php
session_start();
require_once('../../class/class.php');
include '../includes/msg.php';
?>


<!-- Add Event -->
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['startDate']) && !empty($_POST['endDate']) && !empty($_FILES['image']['name'])) {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $startDate =  $_POST['startDate'];
        $endDate =  $_POST['endDate'];

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        $uploadDir = 'uploads/events/';
        $imagePath = $uploadDir . basename($imageName);

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (move_uploaded_file($imageTmpName, $imagePath)) {

            $admin = new Admin(9, 'Admin', 'admin@a', 'a');
            $addEventResult = $admin->AddEvent($title, $content, $startDate, $endDate, $imagePath);

            if ($addEventResult) {
                $_SESSION['msg'] = "You Have Added Event Successfully!";
                header("Location:../events.php");
                exit();
            } else {
                $_SESSION['error'] = "An Error";
                header("Location:../events.php");
                exit();
            }
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        echo "Error:";
    }
}
?>
<!-- Add Event -->


<!-- Delete Event -->
<?php
if ($id = $_GET['idDel']) {
    $admin = new Admin();
    $doneDeleted = $admin->DeleteEvents($id);

    if ($doneDeleted) {
        $_SESSION['msg'] = "An Even Deleted";
        header("Location:../events.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../events.php");
        exit();
    }
}
?>
<!-- Delete Event -->



<!-- Delete Event User Registered -->
<?php

if ($id2 = $_GET['idDelUser']) {

$admin = new Admin();
$doneDeleteUser = $admin->DeleteEventUser($id2);

if ($doneDeleteUser) {
    $_SESSION['msg'] = "An Registered User Deleted";
    header("Location:../events.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../events.php");
    exit();
}
}
?>
<!-- Delete Event User Registered -->