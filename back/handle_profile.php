<?php
session_start();
require_once('../class/class.php');
include '../includes/msg.php';
?>

<?php
$userid = $_SESSION['user_id'] ;

if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) || !empty($_FILES['image']['name'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $imagePath = $_SESSION['user_image'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            header("Location: ../pages/profile.php");
            exit();
        }

        if (!empty($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $uploadDir = 'uploads/profile/';
        $imagePath = $uploadDir . basename($imageName);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $imageDone = move_uploaded_file($imageTmpName, $imagePath);
        }

        $subscriber = new Subscriber();
        $done = $subscriber->ProfileUpdate($_SESSION['user_id'], $firstName, $lastName, $email, $imagePath);

        if ($done) {

            $_SESSION['user_firstName'] = $firstName;
            $_SESSION['user_lastName'] = $lastName;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_image'] = $imagePath;

            $_SESSION['msg'] = "You Have Updated Your Profile";
            header("Location:../pages/profile.php");
            exit();
        } else {
            $_SESSION['error'] = "An Error";
            header("Location:../pages/profile.php");
            exit();
        }
    }
}


// if (!empty($_POST['old_pass']) || !empty($_POST['new_pass']) ) {

//     $oldPassword = $_POST['old_pass'];
//     $newPassword = $_POST['new_pass'];

//     require_once('../includes/conn.php');

//     $getUserQuery = "SELECT password FROM users WHERE id = '$userid'"; 
//     $result = mysqli_query($conn, $getUserQuery);

//     if ($result && mysqli_num_rows($result) === 1) {
//         $userRow = mysqli_fetch_assoc($result);
//         $storedPassword = $userRow['password'];

//         if ($oldPassword != $storedPassword) {
//             $_SESSION['error'] = "Old password is incorrect.";
//             header("Location:../pages/profile.php");
//             exit();
//         }

//         $updateQuery = "UPDATE users SET password = '$newPassword' WHERE id = $userid" ;
//         mysqli_query($conn, $updateQuery);
//     } else {
//         $_SESSION['error'] = "User not found.";
//         header("Location:../pages/profile.php");
//         exit();
//     }
// }

?>