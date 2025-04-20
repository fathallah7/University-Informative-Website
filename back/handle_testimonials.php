<?php 
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = "Only Students Post Here - Login First ";
    header('Location:../pages/testimonials.php');
    exit();
}

if (isset($_POST['send'])) {
    if ( !empty($_POST['content']) && !empty($_POST['rating']) ) {
    $content = $_POST['content'];
    $rating = $_POST['rating'];

    require_once("../class/class.php");
    
    $subscriber = new Subscriber();
    $done = $subscriber->AddTestimonials($_SESSION['user_id'] , $_SESSION['user_email'] , $content , $rating);

    if ($done) {
        $_SESSION['msg'] = "Done Your Message Was Sent";
        header("Location:../pages/testimonials.php");
    }
}
}
?>