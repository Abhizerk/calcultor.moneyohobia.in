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
            <h1>P/E Ratio Calculator</h1>
            <p>This calculator helps you determine the Price-to-Earnings (P/E) ratio of a stock. The P/E ratio is a measure of a company's current share price relative to its per-share earnings.</p>
        </div>
    </section>

    <section class="calculator-info">
        <div class="calculator-info-container">
            <h2>Key Terms</h2>
            <ul>
                <li><strong>Price-to-Earnings (P/E) Ratio:</strong> A valuation ratio, calculated by dividing the current share price by the earnings per share (EPS). It indicates how much investors are willing to pay for a dollar of earnings.</li>
                <li><strong>Share Price:</strong> The current market price of one share of the company's stock.</li>
                <li><strong>Earnings per Share (EPS):</strong> The portion of a company's profit allocated to each outstanding share of common stock.</li>
            </ul>
        </div>
    </section>

    <section class="calculator">
        <div class="calculator-container">
            <h2>Calculate P/E Ratio</h2>
            <form action="" method="post">
                <label for="share-price">Share Price (₹):</label>
                <input type="number" id="share-price" name="share_price" step="0.01" required>

                <label for="eps">Earnings per Share (EPS) (₹):</label>
                <input type="number" id="eps" name="eps" step="0.01" required>

                <button type="submit">Calculate</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sharePrice = $_POST['share_price'];
                $eps = $_POST['eps'];

                if ($eps > 0) {
                    $peRatio = $sharePrice / $eps;
                    echo "<p>The P/E Ratio is: " . number_format($peRatio, 2) . "</p>";
                } else {
                    echo "<p>Please enter a valid EPS value.</p>";
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
                <li><a href="dividend-yield-calculator.php">Dividend Yield Calculator</a></li>
                <!-- Add more related calculators here -->
            </ul>
        </div>
    </section>
</main>

<?php
include '../footer.php';
?>
