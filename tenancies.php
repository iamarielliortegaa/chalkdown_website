<?php
require 'config/db.php';
$tenancies = $pdo->query("SELECT * FROM Tenancy")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>

<h2>Manage Tenancies</h2>

<table>
<tr><th>ID</th><th>Unit</th><th>Start</th><th>End</th></tr>
<?php foreach ($tenancies as $t): ?>
<tr>
<td><?= $t['tenancy_id'] ?></td>
<td><?= $t['unit_id'] ?></td>
<td><?= $t['start_date'] ?></td>
<td><?= $t['end_date'] ?? 'Active' ?></td>
</tr>
<?php endforeach; ?>
</table>

<form action="actions/add_tenancy.php" method="post" class="card">
<h3>Add Tenancy</h3>
<input name="unit_id" placeholder="Unit ID" required>
<input type="date" name="start_date" required>
<button>Add</button>
</form>

</body>
</html>
