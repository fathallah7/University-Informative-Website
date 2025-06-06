<?php

abstract class User
{

    public $id;
    public $name;
    public $email;
    public $role = "subscriber";
    public $password;

    function __construct($id = null, $name = null, $email = null, $password = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    public static function login($email, $password)
    {
        $qry = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
        require_once('../includes/conn.php');
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }
}



class Subscriber extends User
{

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function ProfileUpdate($id, $first_name, $last_name, $email, $image)
    {
        require_once('../includes/conn.php');
        $profileUpdate = "UPDATE `users` SET
                            `firstName`='$first_name',`lastName`='$last_name',`email`='$email',`image`='$image'
                                WHERE `id`='$id' ";
        $profileResult = mysqli_query($conn, $profileUpdate);
        return $profileResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function ShowPosts()
    {
        require_once('../includes/conn.php');
        $posts = "SELECT * FROM `posts`";
        $postsResult = mysqli_query($conn, $posts);
        return $postsResult;
    }

    public function ShowPostsMoreInfo($id)
    {
        require_once('../includes/conn.php');
        $postsMoreInfo = "SELECT * FROM `posts` WHERE `id` = $id";
        $postsMoreInfoResult = mysqli_query($conn, $postsMoreInfo);
        return $postsMoreInfoResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function ShowEvents()
    {
        require_once('../includes/conn.php');
        $events = "SELECT * FROM `events`";
        $eventsResult = mysqli_query($conn, $events);
        return $eventsResult;
    }

    public function EventRegister($name, $email, $phone, $idEvent)
    {
        global $conn;
        require_once('../includes/conn.php');

        $checkQuery = "SELECT * FROM event_registrations 
                        WHERE (email = '$email' OR phone = '$phone') AND event_id = '$idEvent'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            return 'already_registered';
        } else {
            $insertRegister = "INSERT INTO event_registrations (name, email, phone, event_id)
                                VALUES ('$name', '$email', '$phone', '$idEvent')";
            $sendRegister = mysqli_query($conn, $insertRegister);

            return $sendRegister ? 'success' : 'fail';
        }
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function ShowBooks()
    {
        require_once('../includes/conn.php');
        $books = "SELECT * FROM `library`";
        $booksResult = mysqli_query($conn, $books);
        return $booksResult;
    }

    public static function BuyBook($book_id)
    {
        require('../includes/conn.php');
        session_start();
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])) {
            $_SESSION['error'] = "Only Students Buy This Books - Login First";
            header('Location: ../pages/library.php');
            exit();
        }

        $user_id = $_SESSION['user_id'];
        $user_email = $_SESSION['user_email'];

        $check_query = "SELECT * FROM cart WHERE user_id = '$user_id' AND book_id = '$book_id'";
        $result = mysqli_query($conn, $check_query);

        if ($result->num_rows > 0) {
            $update_query = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = '$user_id' AND book_id = '$book_id'";
            $conn->query($update_query);
        } else {
            $insert_query = "INSERT INTO cart (user_id, email, book_id) VALUES ('$user_id', '$user_email', '$book_id')";
            $conn->query($insert_query);
        }

        $_SESSION['msg'] = "A book has been added to your cart.";
    }


    public static function Cart()
    {
        require_once('../includes/conn.php');
        $user_id = $_SESSION['user_id'];
        $cart = "SELECT cart.*, library.title, library.price, library.image 
                FROM cart 
                JOIN library ON cart.book_id = library.id 
                WHERE cart.user_id = $user_id";
        if ($resultCart = mysqli_query($conn, $cart)) {
            return $resultCart;
        }
    }

    public static function RemoveFromCart($id)
    {
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `cart` WHERE `id` = $id ";
        $cartDelete = mysqli_query($conn, $delete);
        return $cartDelete;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function ShowStaff()
    {
        require_once('../includes/conn.php');
        // global $conn;
        $staff = "SELECT * FROM `staff`";
        $staffResult = mysqli_query($conn, $staff);
        return $staffResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddTestimonials($userId, $userEmail, $content, $rating)
    {
        require_once('../includes/conn.php');
        $addTestimonials = "INSERT INTO `testimonials`(`user_id`, `user_email`, `content` , `rating`)
                                VALUES ('$userId','$userEmail','$content' , '$rating')";
        $addTestimonialsResult = mysqli_query($conn, $addTestimonials);
        return $addTestimonialsResult;
    }

    public function ShowTestimonials()
    {
        require_once('../includes/conn.php');
        $showTestimonials = "SELECT testimonials.*, users.firstName, users.lastName , users.image
                            FROM testimonials 
                            JOIN users ON testimonials.user_id = users.id 
                            ORDER BY testimonials.id DESC";
        $showTestimonialsResult = mysqli_query($conn, $showTestimonials);
        return $showTestimonialsResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddContact($name, $email, $message)
    {
        require_once('../includes/conn.php');
        $insertMessage = "INSERT INTO `contact` (`name`, `email`, `message`)
                                VALUES ('$name','$email','$message')";
        $addContactResult = mysqli_query($conn, $insertMessage);
        return $addContactResult;
    }
}



// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------



class Admin extends User
{

    // private $conn;

    // public function __construct() {
    //     require_once(__DIR__ . '/../includes/conn.php'); // المسار المناسب حسب مكان الكلاس
    //     $this->conn = $conn;
    // }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddStudent($firstName, $lastName, $email, $grade)
    {
        require_once('../includes/conn.php');
        $addStudent = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `grade`)
                            VALUES ('$firstName', '$lastName','$email','$grade')";
        $addStudentResult = mysqli_query($conn, $addStudent);
        return $addStudentResult;
    }

    public function ShowAccounts()
    {
        require_once('../includes/conn.php');
        $accounts = "SELECT * FROM `users` ";
        $accountsResult = mysqli_query($conn, $accounts);
        return $accountsResult;
    }

    public function DeleteAccounts($id)
    {
        require_once('../includes/conn.php');
        $delete = " DELETE FROM `users` WHERE `id` = $id ";
        $accountDelete = mysqli_query($conn, $delete);
        return $accountDelete;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddPost($title, $content, $imagePath)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addPost = "INSERT INTO `posts`(`title`, `content`, `image`)
                            VALUES ('$title', '$content','$imagePath','$category')";
        $addPostResult = mysqli_query($conn, $addPost);
        return $addPostResult;
    }

    public function ShowPosts()
    {
        require_once('includes/conn.php');
        $posts = "SELECT * FROM `posts`";
        $postsResult = mysqli_query($conn, $posts);
        return $postsResult;
    }

    public function UpdatePosts($id, $title, $content)
    {
        require_once('../includes/conn.php');
        $updatePost = "UPDATE `posts` SET `title`='$title', `content`='$content' 
                WHERE `id` = '$id' ";
        $updatePostResult = mysqli_query($conn, $updatePost);
        return $updatePostResult;
    }

    public function DeletePosts($id)
    {
        require_once('../includes/conn.php');
        $DeletePosts = "DELETE FROM `posts` WHERE `id` = $id";
        $DeletePostsResult = mysqli_query($conn, $DeletePosts);
        return $DeletePostsResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddEvent($title, $content, $startDate, $endDate, $imagePath)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addEvent = "INSERT INTO `events`(`title`, `content`, `start_date` , `end_date` , `image`)
                            VALUES ('$title', '$content', '$startDate' , '$endDate' , '$imagePath')";
        $addEventResult = mysqli_query($conn, $addEvent);
        return $addEventResult;
    }

    public function ShowEvents()
    {
        require_once('includes/conn.php');
        $events = "SELECT * FROM `events`";
        $eventsResult = mysqli_query($conn, $events);
        return $eventsResult;
    }

    public function DeleteEvents($id)
    {
        require_once('../includes/conn.php');
        $DeleteEvents = "DELETE FROM `events` WHERE `id` = $id";
        $DeleteEventsResult = mysqli_query($conn, $DeleteEvents);
        return $DeleteEventsResult;
    }

    public function ShowEventUsers()
    {
        require_once('../includes/conn.php');
        $eventUser = "SELECT * FROM `event_registrations`";
        $eventUserResult = mysqli_query($conn, $eventUser);
        return $eventUserResult;
    }

    public function DeleteEventUser($id)
    {
        require_once('../includes/conn.php');
        $DeleteEventUser = "DELETE FROM `event_registrations` WHERE `id` = $id";
        $DeleteEventUserResult = mysqli_query($conn, $DeleteEventUser);
        return $DeleteEventUserResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public function AddBook($title, $price, $status, $imagePath)
    {
        global $conn;
        require_once('../includes/conn.php');
        $addBook = "INSERT INTO `library`(`title`, `price`, `status`, `image`)
                            VALUES ('$title', '$price','$status','$imagePath')";
        $addBookResult = mysqli_query($conn, $addBook);
        return $addBookResult;
    }

    public function ShowBooks()
    {
        require_once('includes/conn.php');
        $books = "SELECT * FROM `library`";
        $booksResult = mysqli_query($conn, $books);
        return $booksResult;
    }

    public function UpdateBooks($id, $title, $price, $status)
    {
        require_once('../includes/conn.php');
        $updateBook = "UPDATE `library` SET `title`='$title', `price`='$price' , `status` = '$status' 
                WHERE `id` = '$id' ";
        $updateBookResult = mysqli_query($conn, $updateBook);
        return $updateBookResult;
    }

    public function DeleteBooks($id)
    {
        require_once('../includes/conn.php');
        $DeleteBook = "DELETE FROM `library` WHERE `id` = $id";
        $DeleteBookResult = mysqli_query($conn, $DeleteBook);
        return $DeleteBookResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

    public static function AddStaff($name, $category, $imagePath, $cv = null)
    {
        require_once('../includes/conn.php');
        $addStaff = "INSERT INTO `staff`(`name`, `category`, `image`, `cvLink`)
                        VALUES ('$name', '$category', '$imagePath', '$cv')";
        $staffResult = mysqli_query($conn, $addStaff);
        return $staffResult;
    }

    public function ShowStaff()
    {
        require_once('includes/conn.php');
        $staff = "SELECT * FROM `staff`";
        $staffResult = mysqli_query($conn, $staff);
        return $staffResult;
    }

    public function DeleteStaff($id)
    {
        require_once('../includes/conn.php');
        $DeleteStaff = "DELETE FROM `staff` WHERE `id` = $id";
        $DeleteStaffResult = mysqli_query($conn, $DeleteStaff);
        return $DeleteStaffResult;
    }

    // ------------------------------------------------------------
    // ------------------------------------------------------------

}
