<?php
include '../includes/header.php';
require_once('../class/class.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--========== File CSS =========-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--========== File BootStrap 5 ==========-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--========== Render Page ==========-->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!--=========== ICONS ===========-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/logoDarkWithoutBachGround2.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>

    <?php
    include '../includes/msg.php';
    ?>

    <div class="cart-container">

        <h1 class="section-title">Shopping Cart</h1>

        <?php
        $result = Subscriber::Cart();

        if ($result->num_rows > 0) {
            $total = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $subtotal = $row['price'] * $row['quantity'];
                $total += $subtotal;
        ?>
                <div class="cart-item">
                    <img src="../admin/back/<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>">
                    <div class="item-details">
                        <h2 class="item-title"><?php echo $row['title'] ?></h2>
                        <p class="item-info">Price: $<?php echo number_format($row['price'], 2) ?></p>
                        <p class="item-info">Quantity: <?php echo $row['quantity'] ?></p>
                        <p class="item-info">Subtotal: $<?php echo number_format($subtotal, 2) ?></p>
                        <a href="../back/handle_library.php?id_del=<?php echo $row['id'] ?>" class="remove-btn">Remove from Cart</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="cart-summary">
                <div class="total-text">Total: $<?php echo number_format($total, 2) ?></div>
                <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
            </div>
        <?php
        } else {
        ?>
            <div style="text-align: center; padding: 40px; color: #2c3e50; font-size: 20px;">
                Your cart is empty
            </div>
        <?php
        }
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

</body>

</html>