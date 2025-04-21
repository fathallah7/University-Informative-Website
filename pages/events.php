<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>

    <?php
    include '../includes/header.php';
    require_once('../class/class.php');
    ?>

    <section class="section">
        <h2 class="section-title">Events</h2>
        <div class="news">
            <div class="container my-5">
                <div class="container my-5">
                    <?php
                    include '../includes/msg.php';
                    $subscriber = new Subscriber();
                    $rowData = $subscriber->ShowEvents();

                    while ($row = mysqli_fetch_assoc($rowData)) {
                    ?>
                        <div class="event-card">
                            <img src="../admin/back/<?php echo $row['image']; ?>" alt="Event">
                            <div class="event-details w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">From: <?php echo $row['start_date']; ?> → To: <?php echo $row['end_date']; ?></small>
                                    <span class="badge bg-success px-3 py-2 rounded-pill">
                                        <i class="fa fa-users me-1"></i> 124 Registered
                                    </span>
                                </div>
                                <h4 class="mt-2"><?php echo $row['title']; ?></h4>
                                <p>
                                    <?php echo $row['content']; ?>
                                </p>
                                <button class="register-btn mt-2" onclick="toggleForm(this)">
                                    <i class="fa fa-edit me-1"></i> Register
                                </button>
                                <div class="registration-form mt-3" style="display: none;">
                                    <form method="post" action="../back/handle_events.php">
                                        <input type="hidden" name="idEvent" value="<?php echo $row['id']; ?>">
                                        <div class="mb-2">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="mb-2">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/script.js"></script>
    <script>
        function toggleForm(button) {
            const form = button.nextElementSibling;
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>

    <?php
    include '../includes/footer.php';
    ?>

</body>

</html>
