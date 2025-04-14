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


<style>
    .cart-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Times New Roman', serif;
    }

    .cart-item {
        display: flex;
        align-items: center;
        padding: 30px;
        margin-bottom: 20px;
        background: #fff;
        border: 1px solid #e1e1e1;
    }

    .cart-item img {
        width: 120px;
        height: 160px;
        object-fit: cover;
        margin-right: 30px;
    }

    .item-details {
        flex: 1;
    }

    .item-title {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .item-info {
        font-size: 18px;
        color: #34495e;
        margin: 8px 0;
        line-height: 1.6;
    }

    .remove-btn {
        color: #c0392b;
        text-decoration: none;
        font-size: 16px;
        border-bottom: 1px solid #c0392b;
        padding-bottom: 2px;
        transition: all 0.3s ease;
    }

    .remove-btn:hover {
        color: #e74c3c;
    }

    .cart-summary {
        margin-top: 40px;
        padding: 30px;
        background: #f9f9f9;
        border: 1px solid #e1e1e1;
        text-align: right;
    }

    .total-text {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .checkout-btn {
        display: inline-block;
        padding: 15px 40px;
        background: #2c3e50;
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        transition: background 0.3s ease;
    }

    .checkout-btn:hover {
        background: #34495e;
    }

    @media (max-width: 768px) {
        .cart-item {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .cart-item img {
            margin: 0 0 20px 0;
        }

        .cart-summary {           
            text-align: center;       
        }   
    }  
</style>


<body>


<div class="cart-container">

<?php 
    include '../includes/msg.php';
?>
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