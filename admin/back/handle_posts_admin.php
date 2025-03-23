<?php 
include '../includes/conn.php';
require_once('../../class/class.php');
session_start();
?>


<?php 

if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category']) && !empty($_FILES['image']['name'])) {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        $uploadDir = 'uploads/posts/';
        $imagePath = $uploadDir . basename($imageName); 

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); 
        }


            if (move_uploaded_file($imageTmpName, $imagePath)) {

                $admin = new Admin(9, 'Admin', 'admin@a', 'a');
                $addPostResult = $admin->AddPost($title , $content , $imagePath , $category);

                if ($addPostResult) {
                        $_SESSION['msg'] = "You Have Added Post Successfully!";
                        header("Location:../posts.php");
                        exit();
                } else {
                    $_SESSION['error'] = "An Error";
                    header("Location:../posts.php");
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

        }





?>