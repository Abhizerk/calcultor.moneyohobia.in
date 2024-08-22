<?php
// stock-profit-calculator.php
include '../header.php'; // Include the header
?>
<head>
    <link rel="stylesheet" href="calcu.css">
    <link rel="stylesheet" href="/footer-style.css"> <!-- Link to your stylesheet -->
</head>
<main>
    <section class="calculator-info">
        <div class="info-container">
            <h1>Stock Profit Calculator</h1>
            <p>This Stock Profit Calculator helps you determine the profit or loss from your stock investments. It calculates the difference between the buying price and the selling price, taking into account the number of shares and any applicable brokerage fees.</p>
            <div class="key-terms">
                <h2>Key Terms</h2>
                <ul>
                    <li><strong>Buying Price:</strong> The price at which you purchased the stock.</li>
                    <li><strong>Selling Price:</strong> The price at which you sold the stock.</li>
                    <li><strong>Number of Shares:</strong> The total quantity of shares bought or sold.</li>
                    <li><strong>Brokerage Fee:</strong> The fee charged by the broker for buying or selling the stock.</li>
                    <li><strong>Profit/Loss:</strong> The difference between the selling price and the buying price, minus any fees.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="calculator">
        <div class="calculator-container">
            <h2>Calculate Your Stock Profit</h2>
            <form action="calculate_stock_profit.php" method="post">
                <label for="buying-price">Buying Price (₹):</label>
                <input type="number" id="buying-price" name="buying_price" step="0.01" required>

                <label for="selling-price">Selling Price (₹):</label>
                <input type="number" id="selling-price" name="selling_price" step="0.01" required>

                <label for="num-shares">Number of Shares:</label>
                <input type="number" id="num-shares" name="num_shares" step="1" required>

                <label for="brokerage-fee">Brokerage Fee (₹):</label>
                <input type="number" id="brokerage-fee" name="brokerage_fee" step="0.01">

                <button type="submit">Calculate Profit</button>
            </form>
        </div>
    </section>

    <section class="related-calculators">
        <div class="related-container">
            <h2>Related Calculators</h2>
            <ul>
                <li><a href="dividend-yield-calculator.php">Dividend Yield Calculator</a></li>
                <li><a href="pe-ratio-calculator.php">P/E Ratio Calculator</a></li>
                <li><a href="simple-interest-calculator.php">Simple Interest Calculator</a></li>
                <li><a href="compound-interest-calculator.php">Compound Interest Calculator</a></li>
            </ul>
        </div>
    </section>
</main>

<?php
include '../footer.php'; // Include the footer
?>
