<?php
require_once('../class/class.php');



if (isset($_GET['book_id'])) {

    $book_id = $_GET['book_id'];

    $bookAdded = Subscriber::BuyBook($book_id);
    
    if ($bookAdded) {
        $_SESSION['msg'] = "The Book Added to the Cart";
        header('Location:../pages/library.php');
        exit();
    }

}
