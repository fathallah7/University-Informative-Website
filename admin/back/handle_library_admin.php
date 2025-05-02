<?php 
session_start();
require_once('../../class/class.php');
include '../includes/msg.php';
?>

<!-- Add Book -->
<?php 
if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['status']) && !empty($_FILES['image']['name'])) {

        $title = $_POST['title'];
        $price = $_POST['price'];
        $status = $_POST['status'];

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        $uploadDir = 'uploads/library/';
        $imagePath = $uploadDir . basename($imageName); 

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); 
        }

            if (move_uploaded_file($imageTmpName, $imagePath)) {

                $admin = new Admin();
                $addBookResult = $admin->AddBook($title , $price , $status , $imagePath);

                if ($addBookResult) {
                        $_SESSION['msg'] = "You Have Added Book Successfully!";
                        header("Location:../library.php");
                        exit();
                } else {
                    $_SESSION['error'] = "An Error";
                    header("Location:../library.php");
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
<!-- Add Post -->





<!-- Update Post -->

<?php 
if (isset($_GET['book_id_update'])) {
    $_SESSION['book_id_update'] = $_GET['book_id_update'];
    header("Location:../libraryUpdate.php");
    exit();
}

if (isset($_POST['update'])) {
    $titleUpdate = $_POST['titleUpdate'];
    $priceUpdate = $_POST['priceUpdate'];
    $statusUpdate = $_POST['statusUpdate'];

    $admin = new Admin();
    $updateResult = $admin->UpdateBooks($_SESSION['book_id_update'] , $titleUpdate , $priceUpdate , $statusUpdate);

    if ($updateResult) {
        $_SESSION['msg'] = "The Book Updated";
        header("Location:../library.php");
    }
    else {
        $_SESSION['error'] = "An Error";
    }
}
?>

<!-- Update Post -->





<!-- Delete Post -->
<?php 

$id = $_GET['id'];

$admin = new Admin();
$doneDeleted = $admin->DeleteBooks($id);

if ($doneDeleted) {
    $_SESSION['msg'] = "An Book Deleted";
    header("Location:../library.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../library.php");
    exit();
}
?>
<!-- Delete Post -->



