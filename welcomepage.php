<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Electronic Components Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    /* Add your CSS styling here */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        overflow-x: hidden;
        background-color: #f2f2f2;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    p {
        text-align: center;
        font-size: 1.2em;
        color: #555;
    }

    footer {
        text-align: center;
        padding: 1em;
        background-color: #333;
        color: white;
    }

    .product-list {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .product {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        max-width: 200px;
        width: 100%;
    }

    .product img {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }

    .product h3 {
        margin: 10px 0;
        color: #333;
    }

    .product p {
        font-size: 1.2em;
        color: #ff6347;
    }
</style>
<body>

    <header>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="welcomepage.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Browse through our wide collection of electronic components for sale.</p>
        
        <div class="product-list" id="product-list">
            <!-- Products will be dynamically added here -->
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Electronic Components Store. All rights reserved.</p>
    </footer>

    <script>
        // Polygon API details
        const apiKey = 'QC8j8ioS39lhSYgppqXOnpIyFZYL2BV4'; // Replace with your Polygon API key
        const apiUrl = 'https://api.polygon.io/v2/aggs/ticker/AAPL/prev'; // Example endpoint for stock data
        
        // Fetch data from the Polygon API
        fetch(`${apiUrl}?apiKey=${apiKey}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); // Inspect the data returned from the API

                // Handle data properly based on the API response
                const productList = document.getElementById('product-list');
                
                // Assuming data contains stock price and other details (adjust as needed)
                const productElement = document.createElement('div');
                productElement.classList.add('product');
                productElement.innerHTML = `
                    <h3>${data.symbol}</h3>
                    <p>Price: $${data.results[0].c}</p> <!-- Adjust this based on the correct data -->
                `;
                productList.appendChild(productElement);
            })
            .catch(error => {
                console.error('Error fetching data from Polygon API:', error);
            });
    </script>
</body>
</html>
