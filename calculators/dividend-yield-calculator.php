<?php
include '../header.php';
?>
<head>
    <link rel="stylesheet" href="calcu.css">
    <link rel="stylesheet" href="/footer-style.css"> <!-- Link to your stylesheet -->
</head>
<main>
    <section class="calculator-intro">
        <div class="calculator-intro-container">
            <h1>Dividend Yield Calculator</h1>
            <p>This calculator helps you determine the dividend yield of a stock based on its dividend and current stock price.</p>
        </div>
    </section>

    <section class="calculator">
        <div class="calculator-container">
            <h2>Calculate Dividend Yield</h2>
            <form action="" method="post">
                <label for="dividend">Annual Dividend per Share (₹):</label>
                <input type="number" id="dividend" name="dividend" step="0.01" required>

                <label for="price">Current Stock Price (₹):</label>
                <input type="number" id="price" name="price" step="0.01" required>

                <button type="submit">Calculate</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $dividend = $_POST['dividend'];
                $price = $_POST['price'];

                if ($price > 0) {
                    $dividendYield = ($dividend / $price) * 100;
                    echo "<p>Your dividend yield is: " . number_format($dividendYield, 2) . "%</p>";
                } else {
                    echo "<p>Please enter a valid stock price.</p>";
                }
            }
            ?>
        </div>
    </section>

    <section class="related-calculators">
        <div class="related-calculators-container">
            <h2>Related Calculators</h2>
            <ul>
                <li><a href="stock-profit-calculator.php">Stock Profit Calculator</a></li>
                <li><a href="pe-ratio-calculator.php">P/E Ratio Calculator</a></li>
                <!-- Add more related calculators here -->
            </ul>
        </div>
    </section>
</main>

<?php
include '../footer.php';
?>
