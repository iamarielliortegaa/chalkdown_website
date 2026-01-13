<?php
require 'config/db.php';
$payments = $pdo->query("SELECT * FROM RentPayment")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>

<h2>Rent Payments</h2>

<table>
<tr><th>ID</th><th>Tenancy</th><th>Date</th><th>Amount</th></tr>
<?php foreach ($payments as $p): ?>
<tr>
<td><?= $p['payment_id'] ?></td>
<td><?= $p['tenancy_id'] ?></td>
<td><?= $p['payment_date'] ?></td>
<td>£<?= $p['amount'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<form action="actions/add_payment.php" method="post" class="card">
<h3>Add Payment</h3>
<input name="tenancy_id" placeholder="Tenancy ID" required>
<input name="amount" placeholder="Amount" required>
<input type="date" name="payment_date" required>
<button>Save</button>
</form>

</body>
</html>
