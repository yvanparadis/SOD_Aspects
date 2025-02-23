<?php
session_start();
if (isset($_SESSION['username'])) {
    // If the user is already logged in, redirect them to the welcome page
    header("Location: welcomepage.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
        /* Login Page Design */
body {
    font-family: 'Arial', sans-serif;
    background: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.login-container h2 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

/* Form input fields */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
    transition: border-color 0.3s;
}

input[type="text"]:focus, input[type="password"]:focus {
    border-color: #ff6a00;
}

/* Button styling */
button {
    background-color: #ff6a00;
    color: white;
    font-size: 1.2em;
    padding: 15px;
    width: 100%;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

button:hover {
    background-color: #ffcc00;
    transform: scale(1.1);
}

/* Additional styling for links */
a {
    color: #ff6a00;
    text-decoration: none;
    font-size: 1em;
    display: block;
    text-align: center;
    margin-top: 15px;
}

a:hover {
    text-decoration: underline;
}
</style>
<body>

<!-- Navbar -->
<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
    <a href="dashboard.php">Dashboard</a>
</nav>

<!-- Login Form -->
<div class="login-container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Login</button>
    </form>
    <a href="forgot_password.php">Forgot Password?</a>
</div>

<script src="js/script.js"></script>
</body>
</html>
