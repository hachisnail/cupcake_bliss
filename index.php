<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupcake Bliss - “Where Every Cupcake Tells a Sweet Story”</title>
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
            <a href="shop.php?category=all" class="btn">Shop</a>
            <a href="custom.php">Custom Orders</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="login.php">Login</a>
            <?php else: ?>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </nav>
</header>


<main>
    <section class="hero">
        <h1>“𝓦𝓱𝓮𝓻𝓮 𝓔𝓿𝓮𝓻𝔂 𝓒𝓾𝓹𝓬𝓪𝓴𝓮 𝓣𝓮𝓵𝓵𝓼 𝓪 𝓢𝔀𝓮𝓮𝓽 𝓢𝓽𝓸𝓻𝔂”</h1>
        <p>Discover our handcrafted cupcakes made with premium ingredients</p>
        <a href="shop.php" class="cta-button">Shop Now</a>
    </section>


    <section class="featured-products">
        <h2>Featured Cupcakes</h2>
        <div class="products-grid">
            <?php
            $products = [
                [
                    "id" => 1,
                    "name" => "Vanilla Dream",
                    "price" => 40.00,
                    "image" => "vanillacupcake.png",
                    "tag" => "New",
                    "details" => "Light and fluffy vanilla cupcake topped with rich buttercream frosting."
                ],
                [
                    "id" => 2,
                    "name" => "Chocolate Heaven",
                    "price" => 50.00,
                    "image" => "chocolatecupcake.png",
                    "tag" => "Best Seller",
                    "details" => "Moist chocolate cupcake filled with creamy ganache and finished with chocolate swirl."
                ],
                [
                    "id" => 3,
                    "name" => "Red Velvet",
                    "price" => 40.00,
                    "image" => "redvelvetcupcake.png",
                    "tag" => "Best Seller",
                    "details" => "Moist red velvet cupcake made with cocoa powder and buttermilk, topped with rich cream cheese frosting."
                ],
            ];


            foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="product-tag"><?php echo $product['tag']; ?></div>
                    <div class="image-wrapper">
                        <a href="product.php?id=<?php echo $product['id']; ?>">
                            <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                        </a>
                    </div>
                    <h3 class="product-title"><?php echo $product['name']; ?></h3>
                    <p class="product-details"><?php echo $product['details']; ?></p>
                    <p class="product-price">₱<?php echo number_format($product['price'], 2); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="divider"></div>


    <section class="follow-me">
        <h2>FOLLOW ME FOR MORE BITES</h2>
        <a href="allcup.php" class="follow-button">All Cupcakes</a>
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


<script>
// Add event listeners or functions for interactive elements (e.g., cart buttons, login, etc.)
</script>


</body>
</html>
