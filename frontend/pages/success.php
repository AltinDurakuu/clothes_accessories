<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            color: #333;
        }
        
        h1 {
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }
        
        p {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 10px;
        }
        
        li {
            margin-bottom: 5px;
        }
        
        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>
