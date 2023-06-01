<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "clothes_accessories";

// Create a connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$totalAmount = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the product IDs from localStorage
    if (isset($_POST['product_ids'])) {
        $productIds = json_decode($_POST['product_ids'], true);

        // Prepare the SQL statement to retrieve the prices and names based on the product IDs
        $stmt = $conn->prepare("SELECT idproduct, name, price FROM product WHERE idproduct = ?");
        if (!$stmt) {
            die("Prepare failed: " . $mysqli->error);
        }

        // Execute the statement for each product ID
        foreach ($productIds as $productId) {
            // Bind the parameter to the statement
            $stmt->bind_param("i", $productId);

            // Execute the statement
            if ($stmt->execute()) {
                // Bind the result to variables
                $stmt->bind_result($id, $name, $price);

                // Fetch the result
                $stmt->fetch();

                // Process the retrieved data
                echo "Product Name: $name, Price: $$price<br>";

                // Calculate the total amount
                $totalAmount += $price;
            } else {
                echo "Error executing query: " . $stmt->error;
            }
        }

        // Close the statement
        $stmt->close();

        // Display the total amount
        echo "Total Amount: $$totalAmount";
    } else {
        echo "No product IDs found.";
    }
}

// PayPal Button
if ($totalAmount > 0) {
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pay with PayPal</title>
            <!-- Include the PayPal JavaScript SDK -->
            <script src="https://www.paypal.com/sdk/js?client-id=AT6GZrfq-IgOwXV9t8UATxBG9m9vESe6qfTOSV9-nXgshLYlMfByFWE8-QwtmxMtRTZJznISp-TL6jFv"></script>
        </head>
        <body>
            <div id="paypal-button-container"></div>

            <script>
                // Render the PayPal button
                paypal.Buttons({
                    createOrder: function(data, actions) {
                        // Set up the transaction details
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: "' . $totalAmount . '"
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions) {
                        // Capture the funds from the transaction
                        return actions.order.capture().then(function(details) {
                            // Redirect to a success page or perform further actions
                            window.location.href = "success.php";
                        });
                    },
                    onCancel: function(data) {
                        // Handle cancellation
                        window.location.href = "cancel.php";
                    },
                    onError: function(err) {
                        // Handle errors
                        console.error(err);
                    }
                }).render("#paypal-button-container");
            </script>
        </body>
        </html>
    ';
}
?>
