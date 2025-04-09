<?php 
session_start();
require_once('../../class/class.php');
include '../includes/msg.php';
?>

<!-- Add Staff -->
<?php 
if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['category']) && !empty($_FILES['image']['name'])) {

        $name = $_POST['name'];
        $category = $_POST['category'];
        $cv = $_POST['cv'];

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        $uploadDir = 'uploads/staff/';
        $imagePath = $uploadDir . basename($imageName); 

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); 
        }

            if (move_uploaded_file($imageTmpName, $imagePath)) {

                $addStaffResult = Admin::AddStaff($name , $category , $imagePath , $cv);

                if ($addStaffResult) {
                        $_SESSION['msg'] = "You Have Added An Staff Successfully!";
                        header("Location:../staff_univ.php");
                        exit();
                } else {
                    $_SESSION['error'] = "An Error";
                    header("Location:../staff_univ.php");
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



<!-- Delete Staff -->
<?php 

$id = $_GET['id'];

$admin = new Admin();
$doneDeleted = $admin->DeleteStaff($id);

if ($doneDeleted) {
    $_SESSION['msg'] = "An Staff Deleted";
    header("Location:../staff_univ.php");
    exit();
} else {
    $_SESSION['error'] = "An Error";
    header("Location:../staff_univ.php");
    exit();
}

?>
