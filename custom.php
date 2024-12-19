<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Cupcake - Cupcake Bliss</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/customization.js"></script> <!-- Link to JS for real-time updates -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
</head>
<body>


<header class="header">
    <div class="top-header">
        <div class="left">
            <p>📞 (555) 123-4567</p>
        </div>
        <div class="center">
            <a href="index.php" class="logo">
                <img src="assets/images/cupcakeblisslogo.png" alt="Cupcake Bliss Logo">
            </a>
        </div>
        <div class="right">
            <a href="#" class="social-icon">🌐</a>
            <a href="#" class="social-icon">📘</a>
            <a href="#" class="social-icon">📸</a>
        </div>
    </div>
   
    <div class="divider"></div>


    <nav class="navbar">
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="custom.php">Custom Orders</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="login.php">Login</a>
            <?php else: ?>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
            <a href="cart.php" class="cart-icon">
                🛒 <span>(<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</span>
            </a>
        </div>
    </nav>
</header>


<main>
    <section class="customization-section">
        <h2 class="centered-title">Customize Your Cupcake!</h2>


        <form id="customization-form">
            <!-- Flavor Selection -->
            <label for="flavor">Choose Flavor:</label><br />
            <select id="flavor" name="flavor">
                <option value="vanilla">Vanilla</option>
                <option value="chocolate">Chocolate</option>
                <option value="red_velvet">Red Velvet</option>
                <option value="lemon">Lemon</option>
                <!-- Add more flavors -->
            </select><br />


            <!-- Frosting Selection -->
            <label for="frosting">Choose Frosting:</label><br />
            <select id="frosting" name="frosting">
                <option value="buttercream">Buttercream</option>
                <option value="cream_cheese">Cream Cheese</option>
                <option value="whipped_cream">Whipped Cream</option>
                <!-- Add more frostings -->
            </select><br />


            <!-- Topping Selection -->
            <label for="toppings">Choose Toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="sprinkles"> Sprinkles<br />
            <input type="checkbox" name="toppings[]" value="nuts"> Nuts<br />
            <input type="checkbox" name="toppings[]" value="chocolate_chips"> Chocolate Chips<br />
            <!-- Add more toppings -->


            <!-- Real-time preview section -->
            <div id="preview"></div>


            <!-- Submit Button -->
            <button type="submit">Add to Cart!</button>
        </form>
    </section>
</main>


<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Cupcake Bliss</h3>
            <p>Bringing sweetness to your special moments</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@cupcakebliss.com</p>
            <p>Phone: (555) 123-4567</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Cupcake Bliss. All rights reserved.</p>
    </div>
</footer>


</body>
</html>
