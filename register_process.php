<?php
include('includes/db_connect.php');  // Ensure the connection is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the registration form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists in the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));  // Display error if query fails
    }

    if (mysqli_num_rows($result) > 0) {
        // If the username already exists, show an error message
        echo "Username already exists!";
    } else {
        // If the username is available, insert the new user into the database
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($conn, $query)) {
            echo "Registration successful!";
            // Redirect to the login page after successful registration
            header("Location: login.php");
        } else {
            // If there's an error during insertion, display the error message
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
