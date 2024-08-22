<?php
// calculate_stock_profit.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $num_shares = $_POST['num_shares'];
    $brokerage_fee = $_POST['brokerage_fee'] ?? 0;

    // Calculate total cost and total sale
    $total_cost = ($buying_price * $num_shares) + $brokerage_fee;
    $total_sale = ($selling_price * $num_shares);

    // Calculate profit or loss
    $profit_or_loss = $total_sale - $total_cost;
    $result = number_format($profit_or_loss, 2);

    echo "<h1>Calculation Result</h1>";
    echo "<p>Total Cost: ₹" . number_format($total_cost, 2) . "</p>";
    echo "<p>Total Sale: ₹" . number_format($total_sale, 2) . "</p>";
    echo "<p><strong>Profit/Loss: ₹" . ($profit_or_loss >= 0 ? $result : "-$result") . "</strong></p>";
}
?>
