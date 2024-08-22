<?php
$pageTitle = "Stock Calculators - Home";
include('header.php');
?>
<head>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your stylesheet -->
</head>
<main>
    <!-- Top Section Below Header -->
    <section class="intro">
        <div class="intro-container">
            <h1>Welcome to Stock Calculators</h1>
            <p>We provide a range of calculators for stock market experts and enthusiasts. Our tools help you analyze investments, calculate dividends, and more to make informed financial decisions.</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="main-content">
        <div class="content-container">
            <div class="calc-links">
                <h2>Stock Market Calculators</h2>
                <ul>
                    <li><a href="calculators/stock-profit-calculator.php">Stock Profit Calculator</a></li>
                    <li><a href="calculators/dividend-yield-calculator.php">Dividend Yield Calculator</a></li>
                    <li><a href="calculators/pe-ratio-calculator.php">P/E Ratio Calculator</a></li>
                    <!-- Add more stock calculators here -->
                </ul>
            </div>
            <div class="interest-calcs">
                <h2>Interest Calculators</h2>
                <ul>
                    <li><a href="calculators/simple-interest-calculator.php">Simple Interest Calculator</a></li>
                    <li><a href="calculators/compound-interest-calculator.php">Compound Interest Calculator</a></li>
                    <!-- Add more interest calculators here -->
                </ul>
            </div>
        </div>
    </section>

    <!-- Basic Needs Calculator Section -->
    <section class="basic-needs">
        <div class="basic-needs-container">
            <h2>Basic Needs Calculator</h2>
            <p>Our Basic Needs Calculator helps you estimate the essential expenses required to maintain a comfortable lifestyle. Whether you're budgeting for groceries, rent, or utilities, this tool is designed to assist you in managing your finances effectively.</p>
            <a href="calculators/basic-needs-calculator.php" class="btn">Use the Calculator</a>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
