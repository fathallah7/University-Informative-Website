<?php
require_once('../class/class.php');



if (isset($_GET['book_id'])) {

    $book_id = $_GET['book_id'];

    $bookAdded = Subscriber::BuyBook($book_id);
    

        $_SESSION['msg'] = "The Book Added To The Cart";
        header("Location:../pages/library.php");
        exit();

}

if (isset($_GET['id_del'])) {

    $bookDelete_id = $_GET['id_del'];

    $bookDelete = Subscriber::RemoveFromCart($bookDelete_id);

        $_SESSION['error'] = "The Book Deleted From the Cart";
        header('Location:../pages/cart.php');
        exit();


}
