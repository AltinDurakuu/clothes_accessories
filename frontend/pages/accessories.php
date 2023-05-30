<?php
session_start();
// Assuming you have already established a database connection

// Prepare the SQL query

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


// Execute the query





// Free the result set


// Close the database connection
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clothes & Accessories</title>
    <link rel="icon" href="../dist/images/iconlogo.svg">
    <script src="https://kit.fontawesome.com/506def2643.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../dist/scss/app.css" />
  </head>

  <body>
    <header class="full-block">
      <div class="header-navigation-container" id="scroll-container">
        <div class="container">
          <div class="navigation">
            <div class="navigation-left-side">
              <a href="../index.php"><img src="../logos/logo.svg" width="200px" alt=""></a>
            </div>
            <div class="navigation-right-side">
              <nav>
                <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="clothes.php">Clothes</a></li>
                  <li><a href="accessories.php" class="active">Accessories</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <?php
                                           if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                                            // User is logged in
                                            echo "<li><a href='logout.php'>Log out</a></li>";
                                        } else {
                                            // User is not logged in
                                            echo "<li><a href='login.php'>Log In</a></li>";
                                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                                        }
                  ?>
                  <li>
                    <a href="cart.php"
                      ><img src="../dist/images/shopping-cart.svg" width="30px" alt=""
                    /></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="full-block">
    <section class="clothes-accessories full-block">
        <div class="container clothes-accessories-content">
          <form class="clothes-accessories-form">
            <div class="clothes-accessories-group">
              <label for="search">Search:</label>
              <input id="search" type="text" placeholder="Search" name="search"  />
             <button class="btn btn--form" type="submit" value="Search">Search</button>
            </div>
            <div class="clothes-accessories-group">
              <label for="category">Category:</label>
              <label>
                <input type="checkbox" name="category" value="men"> Men
              </label>
              <label>
                <input type="checkbox" name="category" value="women"> Women
              </label>
              <label>
                <input type="checkbox" name="category" value="accessories"> Accessories
              </label>
            </div>
            <div class="clothes-accessories-group">
              <label for="price">Sort by price</label>
              <input type="range" id="price" name="price" min="0" max="100" step="10">
            </div>
          </form>
      </div>
      </section>
    <section class="products-section products-accessories full-block" id="on-sale">
        <div class="container">
          <div class="grid-container" id="accessories_grid">
            <?php
                  require_once 'database.php';
                  $queryForAccessories = "SELECT *
                  FROM product
                  WHERE type = 'accessories'
                  ORDER BY times_sold DESC;";
                  

                  $result1 = $conn->query($queryForAccessories);
                  if ($result1) {
                      // Render the results for each query
                      renderResults($result1, "accessories_grid");
                  } else {
                      // Handle the case when the queries fail
                      echo "Error retrieving products: " . $conn->error;
                  } 
                $conn->close();
                ?>
          </div>                            
          </div>
        </div>
      </section>
    </main>
    <footer class="footer-section full-block">
      <div class="container">
        <div class="footer-section-left-side">
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
          <p>name@gmail.com</p>
          <p>044 132 132</p>
        </div>
        <div class="footer-section-center">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="clothes.php">Clothes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php
                                           if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                                            // User is logged in
                                            echo "<li><a href='pages/logout.php'>Log out</a></li>";
                                        } else {
                                            // User is not logged in
                                            echo "<li><a href='pages/login.php'>Log In</a></li>";
                                            echo "<li><a href='pages/signup.php'>Sign Up</a></li>";
                                        }
                  ?>
          </ul>
        </div>
        <div class="footer-section-right-side">
            <a href="../index.php"><img src="../logos/logo2.svg" width="200px" alt=""></a>
        </div>
      </div>
    </footer>

    <script src="./../dist/js/app.js"></script>
  </body>
</html>
