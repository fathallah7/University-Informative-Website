<?php 
include '../includes/conn.php';
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

        // تحديد مسار حفظ الصورة
        $uploadDir = 'uploads/posts/'; // المسار المطلق للمجلد
        $imagePath = $uploadDir . basename($imageName); // بناء المسار الكامل

        // إنشاء المجلد إذا لم يكن موجودًا
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // إنشاء المجلد مع صلاحيات 755
        }


            // تحميل الصورة إلى المجلد المحدد
            if (move_uploaded_file($imageTmpName, $imagePath)) {
                // إدخال البيانات في قاعدة البيانات
                require_once('../../class/class.php');
                $admin = new Admin();
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
            $_SESSION['error'] = "Please Enter All Information!";
            header("Location: index.php");
            exit();
        }

        }





?>