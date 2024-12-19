<?php
session_start();
require 'database.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Password is correct, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        
        header("Location: index.php"); // Redirect to the home page
        exit;
    } else {
        // Invalid credentials
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error - Cupcake Bliss</title>
    <link rel="stylesheet" href="/cupcake_bliss/assets/css/style.css">
</head>
<body>
    <div class="error-message">
        <p><?php echo isset($error) ? $error : ''; ?></p>
        <a href="login.php">Go back to login</a>
    </div>
</body>
</html>