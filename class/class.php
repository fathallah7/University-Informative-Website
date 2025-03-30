<?php 

abstract class User
{

    public $id;
    public $name;
    public $email;
    public $role = "subscriber";
    public $password;

    function __construct($id, $name, $email, $password)
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

    public static function register($first_name, $last_name , $email, $password)
    {
        require_once('../includes/conn.php');
        $checkEmail = "SELECT * FROM `users` WHERE `email` = '$email' ";
        $checkEmaiResult = mysqli_query($conn, $checkEmail);
        if ($checkEmaiResult->num_rows > 0) {
            return false;
        }
        else {
            $sql = "INSERT INTO `users`( `firstName`, `lastName` , `email`, `password`) 
            VALUES ('$first_name' , '$last_name' , '$email' , '$password')";
        require_once('../includes/conn.php');
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    }



    public static function ShowPosts() {
        require_once('includes/conn.php');
        $posts = "SELECT * FROM `posts`";
        $postsResult = mysqli_query($conn , $posts);
        return $postsResult;
    }

    public static function ShowPostsMoreInfo($id) {
        require_once('includes/conn.php');
        $postsMoreInfo = "SELECT * FROM `posts` WHERE `id` = $id";
        $postsMoreInfoResult = mysqli_query($conn , $postsMoreInfo);
        return $postsMoreInfoResult;
    }



    public static function ShowStaff() {
        require_once('includes/conn.php');
        $staff = "SELECT * FROM `staff`";
        $staffResult = mysqli_query($conn , $staff);
        return $staffResult;
    }



    public static function AddTestimonials($userId , $userEmail , $content) {
        require_once('../includes/conn.php');
        $addTestimonials = "INSERT INTO `testimonials`(`user_id`, `user_email`, `content`)
                                VALUES ('$userId','$userEmail','$content')";
        $addTestimonialsResult = mysqli_query($conn , $addTestimonials);
        return $addTestimonialsResult;
    }

    public static function ShowTestimonials() {
        require_once('includes/conn.php');
        $showTestimonials = "SELECT testimonials.*, users.firstName, users.lastName
                            FROM testimonials 
                            JOIN users ON testimonials.user_id = users.id 
                            ORDER BY testimonials.id DESC";
        $showTestimonialsResult = mysqli_query($conn , $showTestimonials);
        return $showTestimonialsResult;
    }


}






class Admin extends User {


        public static function ShowAccounts() {
            require_once('../includes/conn.php');
            $accounts = "SELECT * FROM `users` ";
            $accountsResult = mysqli_query($conn , $accounts);
            return $accountsResult;
        }

        public static function DeleteAccounts($id) {
            require_once('../includes/conn.php');
            $delete = " DELETE FROM `users` WHERE `id` = $id ";
            $accountDelete = mysqli_query($conn , $delete);
            return $accountDelete;
        }


        public function AddPost( $title , $content , $imagePath , $category ) {
            global $conn;
            require_once('../includes/conn.php');
            $addPost = "INSERT INTO `posts`(`title`, `content`, `image`, `category`)
                            VALUES ('$title', '$content','$imagePath','$category')";
            $addPostResult = mysqli_query($conn , $addPost);
            return $addPostResult;
        }

        public static function ShowPosts() {
            require_once('includes/conn.php');
            $posts = "SELECT * FROM `posts`";
            $postsResult = mysqli_query($conn , $posts);
            return $postsResult;
        }

        public static function DeletePosts($id) {
            require_once('../includes/conn.php');
            $DeletePosts = "DELETE FROM `posts` WHERE `id` = $id";
            $DeletePostsResult = mysqli_query($conn , $DeletePosts);
            return $DeletePostsResult;
        }





        public static function AddStaff($name , $category , $imagePath , $cv = null) {
            require_once('../includes/conn.php');
            $addStaff = "INSERT INTO `staff`(`name`, `category`, `image`, `cvLink`)
                        VALUES ('$name', '$category', '$imagePath', '$cv')";
            $staffResult = mysqli_query($conn , $addStaff);
            return $staffResult;
        }

        public static function ShowStaff() {
            require_once('includes/conn.php');
            $staff = "SELECT * FROM `staff`";
            $staffResult = mysqli_query($conn , $staff);
            return $staffResult;
        }

        public static function DeleteStaff($id) {
            require_once('../includes/conn.php');
            $DeleteStaff = "DELETE FROM `staff` WHERE `id` = $id";
            $DeleteStaffResult = mysqli_query($conn , $DeleteStaff);
            return $DeleteStaffResult;
        }



}


?>