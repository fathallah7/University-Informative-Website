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


}


?>