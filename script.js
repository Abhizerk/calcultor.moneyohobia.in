function calculateProfit() {
    const buyPrice = document.getElementById('buy-price').value;
    const sellPrice = document.getElementById('sell-price').value;
    const shares = document.getElementById('shares').value;

    const profit = (sellPrice - buyPrice) * shares;
    document.getElementById('result').textContent = 'Your profit is $' + profit.toFixed(2);
}
