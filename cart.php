<?php
session_start();

// Handle removing an item from the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_item_id'])) {
    $remove_item_id = intval($_POST['remove_item_id']);
    unset($_SESSION['cart'][$remove_item_id]);
    header("Location: cart.php");
    exit();
}

// Handle updating item quantities
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_quantities'])) {
    foreach ($_POST['quantities'] as $item_id => $quantity) {
        if (isset($_SESSION['cart'][$item_id])) {
            $_SESSION['cart'][$item_id]['quantity'] = max(1, intval($quantity)); // Ensure minimum quantity of 1
        }
    }
    header("Location: cart.php");
    exit();
}

// Calculate the total
$subtotal = 0;
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Cupcake Bliss</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
            <a href="shop.php">Shop</a>
            <a href="custom.php">Custom Orders</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="divider"></div>
</header>

<main>
    <section class="cart-section">
        <h2 class="centered-title">My Cart</h2>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <form method="POST" action="cart.php">
                <div class="cart-items">
                    <?php foreach ($_SESSION['cart'] as $item_id => $item): ?>
                        <div class="cart-item">
                            <div class="cart-item-image">
                                <img src="assets/images/<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            </div>
                            <div class="cart-item-details">
                                <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                                <p>₱<?php echo number_format($item['price'], 2); ?> each</p>
                                <div class="quantity-controls">
                                    <input type="number" name="quantities[<?php echo $item_id; ?>]" value="<?php echo $item['quantity']; ?>" min="1">
                                </div>
                                <p>Total: ₱<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p>
                            </div>
                            <div class="cart-item-remove">
                                <button type="submit" name="remove_item_id" value="<?php echo $item_id; ?>" class="remove-button">Remove</button>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                </div>

                <div class="cart-summary">
                    <h3>Order Summary</h3>
                    <p>Subtotal: <span>₱<?php echo number_format($subtotal, 2); ?></span></p>
                    <label for="delivery-location">Delivery Location:</label>
                    <select id="delivery-location" name="delivery_location">
                        <option value="Location 1">Location 1</option>
                        <option value="Location 2">Location 2</option>
                    </select>
                    <p>Total: <span>₱<?php echo number_format($subtotal, 2); ?></span></p>
                    <button type="submit" name="update_quantities" class="update-button">Update Cart</button>
                    <a href="checkout.php" class="checkout-button">Proceed to Checkout</a>
                </div>
            </form>
        <?php else: ?>
            <p>Your cart is empty. <a href="shop.php">Continue shopping</a>.</p>
        <?php endif; ?>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Cupcake Bliss. All rights reserved.</p>
</footer>
</body>
</html>
