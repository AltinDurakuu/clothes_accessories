<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
</head>
<body>
    <h1>Payment Successful!</h1>
    <p>Thank you for your purchase. Your payment has been successfully processed.</p>
    <p>Order Details:</p>
    <ul>
        <li>Order ID: <?php echo $_GET['order_id']; ?></li>
        <li>Payment ID: <?php echo $_GET['payment_id']; ?></li>
        <li>Amount: $<?php echo $_GET['amount']; ?></li>
        <!-- Add any other relevant order details here -->
    </ul>
    <p>For any inquiries or issues regarding your order, please contact our customer support.</p>
</body>
</html>
