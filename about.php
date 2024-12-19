<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Cupcake Bliss</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
    <section class="about-section">
        <h2 class="centered-title">Cupcake Bliss</h2>
        <p>Welcome to Cupcake Bliss, where we believe that every moment should be sweet! Our bakery is dedicated to creating the most delicious and beautifully decorated cupcakes for any occasion.
        Founded in 2024, Cupcake Bliss started as a small home-based bakery and has quickly become a beloved local establishment. Our passion for baking and commitment to quality ingredients means that we use only the finest and freshest ingredients in all our recipes.
        We offer a wide variety of flavors and customization options, ensuring that you can create the perfect cupcake for birthdays, weddings, or just a treat for yourself! Our team of skilled bakers is dedicated to providing exceptional service and delicious treats that will leave you coming back for more.
        Thank you for choosing Cupcake Bliss. We look forward to sweetening your day!</p>
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
