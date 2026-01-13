<?php
require 'config/db.php';

$report = $pdo->query("
SELECT t.tenancy_id,
       COALESCE(SUM(r.amount),0) AS paid
FROM Tenancy t
LEFT JOIN RentPayment r ON t.tenancy_id = r.tenancy_id
GROUP BY t.tenancy_id
")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>

<h2>Reports</h2>

<table>
<tr><th>Tenancy</th><th>Total Paid</th></tr>
<?php foreach ($report as $r): ?>
<tr>
<td><?= $r['tenancy_id'] ?></td>
<td>£<?= $r['paid'] ?></td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>
