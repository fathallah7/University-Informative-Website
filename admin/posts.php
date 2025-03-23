<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--========== File BootStrap 5 ==========-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--========== File CSS =========-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--========== Render Page ==========-->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!--=========== ICONS ===========-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>

</head>

<style>
    a {
        text-decoration: none;
    }
</style>

<body>



    <?php
    include 'includes/header.php'
    ?>



    <style>
        .container {
            max-width: 1000px;
            /* زيادة العرض الأقصى */
            padding: 40px 20px;
            /* زيادة الـ padding */
            margin: 0 auto;
            /* توسيط المحتوى */
        }

        .card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            animation: fadeIn 0.5s ease-in-out;
            margin-top: 20px;
            /* إضافة margin أعلى */
            width: 100%;
            /* جعل العرض 100% */
        }

        .card-header {
            background: #1b2a49;
            color: #fff;
            padding: 20px;
            font-size: 1.6rem;
            font-weight: 700;
            text-align: center;
            position: relative;
        }


        .card-header span {
            position: relative;
            z-index: 1;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            border: 1px solid #1b2a49;
            font-family: 'Georgia', serif;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #d4af37;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.4);
        }

        .form-label {
            font-weight: 600;
            font-size: 18px;
            color: #1b2a49;
        }

        .form-control::placeholder {
            font-size: 14px;
            color: #1b2a49;
        }

        .btn-submit {
            background: #1b2a49;
            padding: 12px 30px;
            font-weight: 600;
            color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #d4af37;
            color: #1b2a49;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.5);
        }
    </style>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <span style="margin-right: 10px;">Add New Post</span>
                <i class="fas fa-feather-alt floating-icon"></i>

            </div>
            <div class="card-body p-4">

                <form action="back/handle_posts_admin.php" method="post" enctype="multipart/form-data" >
                    <div class="mb-4">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Enter a classic title" required>
                    </div>

                    <div class="mb-4">
                        <label for="postDescription" class="form-label">Post Description</label>
                        <textarea name="content" class="form-control" id="postDescription" rows="6" placeholder="Craft your story here..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="postCategory" class="form-label">Category</label>
                        <select name="category" class="form-select" id="postCategory" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="news">News</option>
                            <option value="announcements">Announcements</option>
                            <option value="events">Events</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="postImage" class="form-label">Post Image</label>
                        <input type="file" name="image" class="form-control" id="postImage" accept="image/*" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-submit">Publish Post</button>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <!-- custom js file link  -->
    <script src="assets/js/script.js"></script>


</body>

</html>