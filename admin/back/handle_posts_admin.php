<?php 
session_start();
require_once('../../class/class.php');
include '../includes/msg.php';
?>

<!-- Add Post -->
<?php 
if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['image']['name'])) {

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

                $admin = new Admin();
                $addPostResult = $admin->AddPost($title , $content , $imagePath);

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
<!-- Add Post -->





<!-- Update Post -->

<?php 
if (isset($_GET['id_update'])) {
    $_SESSION['id_update'] = $_GET['id_update'];
    header("Location:../postsUpdate.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $titleUpdate = $_POST['titleUpdate'];
    $contentUpdate = $_POST['contentUpdate'];

    $admin = new Admin();
    $updateResult = $admin->UpdatePosts($id , $titleUpdate , $contentUpdate);

    if ($updateResult) {
        $_SESSION['msg'] = "The Post Updated";
        header("Location:../posts.php");
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
$doneDeleted = $admin->DeletePosts($id);

if ($doneDeleted) {
    $_SESSION['msg'] = "An Post Deleted";
    header("Location:../posts.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../posts.php");
    exit();
}
?>
<!-- Delete Post -->



