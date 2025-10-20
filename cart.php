<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cart - GoDaddy Clone</title>
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
  width: 85%;
  margin: 60px auto;
  background: #1a1a1a;
  padding: 30px;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0,0,0,0.5);
}
h2 { color: #0e8f4c; }
.table {
  margin: 20px auto;
  width: 70%;
  border-collapse: collapse;
}
.table th, .table td {
  border: 1px solid #333;
  padding: 12px;
}
button {
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  background: #0e8f4c;
  color: white;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
  transition: 0.3s;
}
button:hover { background: #10a95a; }
</style>
</head>
<body>
<header>Checkout Page</header>
<div class="container">
<?php
$domain = isset($_GET['domain']) ? htmlspecialchars($_GET['domain']) : 'No domain selected';
echo "<h2>Your Shopping Cart</h2>";
echo "<table class='table'>
<tr><th>Domain Name</th><th>Price</th><th>Duration</th></tr>
<tr><td>$domain</td><td>$12.99</td><td>1 Year</td></tr>
</table>";
?>
<button onclick="confirmOrder()">Proceed to Checkout</button>
</div>

<script>
function confirmOrder() {
  alert('Checkout system is under development.\nYour domain will be reserved soon!');
  window.location.href = 'index.php';
}
</script>
</body>
</html>
