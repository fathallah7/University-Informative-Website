<?php 
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = "Login First To Write Your Message";
    header('Location:../pages/testimonials.php');
    exit();
}

if (isset($_POST['send']) && !empty($_POST['content'])) {
    $content = $_POST['content'];
    require_once("../class/class.php");
    $done = Subscriber::AddTestimonials($_SESSION['user_id'] , $_SESSION['user_email'] , $content);

    if ($done) {
        $_SESSION['msg'] = "Done Your Message Was Sent";
        header("Location:../pages/testimonials.php");
    }
}

?>