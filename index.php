<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    /* Home Tab Design */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    overflow-x: hidden;
}

/* Random Background Color */
.home-container {
    position: relative;
    height: 100vh;
    background: linear-gradient(45deg, #ff7e5f, #feb47b, #ff6a00, #ffcc00);
    background-size: 400% 400%;
    animation: gradientBackground 15s ease infinite;
}

/* Keyframe for Random Gradient Background */
@keyframes gradientBackground {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.home-container h1 {
    font-size: 4em;
    color: #fff;
    text-align: center;
    padding: 200px 20px;
    margin: 0;
    animation: textAnimation 3s ease-in-out infinite;
}

/* Add animation to text */
@keyframes textAnimation {
    0% { transform: translateY(30px); opacity: 0; }
    50% { transform: translateY(0); opacity: 1; }
    100% { transform: translateY(30px); opacity: 0; }
}

/* Add a colorful button */
button {
    background-color: #ff6a00;
    color: white;
    font-size: 1.2em;
    padding: 15px 30px;
    border: none;
    cursor: pointer;
    display: block;
    margin: 50px auto;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
}

button:hover {
    background-color: #ffcc00;
    transform: scale(1.1);
}

/* Content Section */
.content {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: -50px;
}

</style>
<body>
    <header>
        <h1>Welcome to the Manager Dashboard</h1>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
