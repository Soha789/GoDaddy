<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout - GoDaddy Clone</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #0b0b0b, #181818);
  color: #fff;
  margin: 0;
  padding: 0;
}
header {
  background: #0e8f4c;
  padding: 15px;
  text-align: center;
  font-size: 24px;
  font-weight: bold;
}
.container {
  width: 80%;
  margin: 60px auto;
  background: #1a1a1a;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(0,0,0,0.5);
}
h2 { color: #0e8f4c; text-align: center; }
.table {
  width: 80%;
  margin: 30px auto;
  border-collapse: collapse;
}
.table th, .table td {
  border: 1px solid #333;
  padding: 12px;
  text-align: center;
}
form {
  width: 70%;
  margin: 30px auto;
  display: flex;
  flex-direction: column;
  gap: 15px;
}
input {
  padding: 12px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  outline: none;
}
input[type="text"], input[type="email"], input[type="number"] {
  background: #222;
  color: #fff;
}
button {
  padding: 14px 25px;
  border: none;
  border-radius: 8px;
  background: #0e8f4c;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
}
button:hover {
  background: #10a95a;
  transform: scale(1.05);
}
footer {
  text-align: center;
  padding: 25px;
  background: #111;
  margin-top: 60px;
  color: #777;
  font-size: 14px;
}
</style>
</head>
<body>
<header>Checkout Page</header>
<div class="container">
<?php
$domain = isset($_GET['domain']) ? htmlspecialchars($_GET['domain']) : 'Unknown Domain';
echo "<h2>Order Summary</h2>";
echo "<table class='table'>
<tr><th>Domain Name</th><th>Price</th><th>Duration</th></tr>
<tr><td>$domain</td><td>$12.99</td><td>1 Year</td></tr>
</table>";
?>
<h2>Billing Information</h2>
<form id="checkoutForm" onsubmit="submitOrder(event)">
  <input type="text" placeholder="Full Name" required>
  <input type="email" placeholder="Email Address" required>
  <input type="text" placeholder="Billing Address" required>
  <input type="number" placeholder="Card Number" required>
  <input type="text" placeholder="Expiry Date (MM/YY)" required>
  <input type="number" placeholder="CVV" required>
  <button type="submit">Complete Purchase</button>
</form>
</div>
<footer>© 2025 GoDaddy Clone | Secure Checkout 🔒</footer>

<script>
function submitOrder(e) {
  e.preventDefault();
  alert("✅ Your order has been successfully placed!\n\nThank you for purchasing your domain with GoDaddy Clone 💚");
  window.location.href = 'index.php';
}
</script>
</body>
</html>
