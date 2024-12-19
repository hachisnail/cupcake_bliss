<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupcake Bliss - Shop</title>
    <link rel="stylesheet" href="/cupcake_bliss/assets/css/style.css">
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
<main>
    <section class="shop-products">
        <h2 class="centered-title">Our Cupcakes</h2>
        <div class="products-grid">
        <?php
            $products = [
                ["id" => 1, "name" => "Vanilla Dream", "price" => 40.00, "image" => "vanillacupcake.png"],
                ["id" => 2, "name" => "Chocolate Heaven", "price" => 50.00, "image" => "chocolatecupcake.png"],
                ["id" => 3, "name" => "Red Velvet", "price" => 40.00, "image" => "redvelvetcupcake.png"],
                ["id" => 4, "name" => "Lemon Zest", "price" => 45.00, "image" => "lemonzestcupcake.png"],
                ["id" => 5, "name" => "Pumpkin Spice Bliss", "price" => 45.00, "image" => "pumpkinspicecupcake.png"],
                ["id" => 6, "name" => "Peppermint Bark Surprise", "price" => 50.00, "image" => "peppermintbarkcupcake.png"],
                ["id" => 7, "name" => "Peanut Butter Cup", "price" => 55.00, "image" => "peanutbuttercupcake.png"],
                ["id" => 8, "name" => "Strawberry Delight", "price" => 50.00, "image" => "strawberryshortcakecupcake.png"],
                ["id" => 9, "name" => "Carrot Cupcake", "price" => 55.00, "image" => "carrotcupcake.png"],
                ["id" => 10, "name" => "Salted Caramel Cupcake", "price" => 50.00, "image" => "saltedcaramelcupcake.png"],
                ["id" => 11, "name" => "Matcha Green Tea Cupcake", "price" => 65.00, "image" => "matchagreenteacupcake.png"],
                ["id" => 12, "name" => "S'mores Cupcake", "price" => 60.00, "image" => "smorescupcake.png"]
            ];


            foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="image-wrapper">
                        <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                    </div>
                    <h3 class="product-title"><?php echo $product['name']; ?></h3>
                    <p class="product-price">₱<?php echo number_format($product['price'], 2); ?></p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
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
