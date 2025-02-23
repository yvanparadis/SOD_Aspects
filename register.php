<?php
session_start();  // Start the session
include('includes/db_connect.php');  // Include the DB connection file

// Process the registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the registration form
    $username = $_POST['username'];
    $password = $_POST['password']; // Raw password (will hash it)

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username already exists in the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // If the username already exists, show an error message
        echo "<div class='error'>Username already exists!</div>";
    } else {
        // If the username is available, insert the new user into the database
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        
        if (mysqli_query($conn, $query)) {
            echo "<div class='success'>Registration successful! You can now <a href='login.php'>Login</a></div>";
            // Redirect to the login page after successful registration
            header("Location: login.php");
        } else {
            // If there's an error during insertion, display the error message
            echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS -->
</head>
<style>
    /* General Body Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

/* Navbar Styles */
nav {
    background-color: #333;
    padding: 15px;
    text-align: center;
}

nav a {
    color: #fff;
    padding: 12px 20px;
    text-decoration: none;
    font-size: 18px;
    margin: 0 10px;
    border-radius: 5px;
}

nav a:hover {
    background-color: #575757;
}

/* Register Container Styles */
.register-container {
    width: 100%;
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.register-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.register-container form {
    display: flex;
    flex-direction: column;
}

.register-container input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.register-container button {
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.register-container button:hover {
    background-color: #45a049;
}

/* Success/Error Message Styles */
.success {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.error {
    background-color: #f44336;
    color: white;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.register-container p {
    text-align: center;
}

.register-container a {
    color: #4CAF50;
    text-decoration: none;
}

.register-container a:hover {
    text-decoration: underline;
}

</style>
<body>

<!-- Navbar -->
<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
</nav>

<!-- Register Form -->
<div class="register-container">
    <h2>Create Account</h2>
    <form action="register_process.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</div>

<script src="js/script.js"></script>
</body>
</html>
