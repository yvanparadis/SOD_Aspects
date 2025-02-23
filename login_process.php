<?php
session_start(); // Start the session to keep the user logged in after successful login

include('includes/db_connect.php');  // Include the DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the login form
    $username = $_POST['username'];
    $password = $_POST['password']; // Password is ignored in this case

    // Query to check if the username exists in the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Fetch the user data from the database
        $user = mysqli_fetch_assoc($result);
        
        // Password check is removed, we now just set the session and redirect
        $_SESSION['username'] = $username;
        header("Location: welcomepage.php"); // Redirect to the welcome page after login
        exit();
    } else {
        // Username does not exist
        echo "Invalid username or password!";
    }
}
?>
