<?php
require '../config/db.php';

$sql = "
INSERT INTO RentPayment (tenancy_id, payment_date, amount, payment_type_id)
VALUES (?, ?, ?, 1)
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['tenancy_id'],
    $_POST['payment_date'],
    $_POST['amount']
]);

header("Location: ../payments.php");
