<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Calculators</title>
    <link rel="stylesheet" href="footer-style.css"> <!-- Link to your stylesheet -->
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="/index.php">
                Stock Calculators
            </a>
        </div>
        <nav class="primary-nav">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/Calculators/stock-profit-calculator.php">Stock Profit Calculator</a></li>
                <li><a href="/calculators/dividend-yield-calculator.php">Dividend Yield Calculator</a></li>
                <li><a href="/calculators/pe-ratio-calculator.php">P/E Ratio Calculator</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="search.php" method="get">
                <input type="text" name="query" placeholder="Search calculators...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</header>
