<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Cupcake Bliss</title>
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
    <section class="contact-section">
        <h2 class="centered-title">Contact Us</h2>
        <p>If you have any questions, feedback, or special requests, we’d love to hear from you! You can reach us through the following methods:</p>


        <h3>Email</h3>
        <p>For inquiries and orders, please email us at <a href="mailto:info@cupcakebliss.com">info@cupcakebliss.com</a>.</p>


        <h3>Phone</h3>
        <p>You can also call us at <strong>(555) 123-4567</strong>. Our customer service team is available from 9 AM to 5 PM, Monday to Friday.</p>


        <h3>Visit Us</h3>
        <p>Feel free to visit our bakery at:</p>
        <address>
            Cupcake Bliss<br>
            123 Sweet St.<br>
            Dessert Town, CA 90210
        </address>


        <h3>Follow Us</h3>
        <p>Stay updated with our latest offerings and promotions by following us on our social media channels:</p>
        <ul>
            <li><a href="#" class="social-icon">🌐 Website</a></li>
            <li><a href="#" class="social-icon">📘 Facebook</a></li>
            <li><a href="#" class="social-icon">📸 Instagram</a></li>
        </ul>
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

