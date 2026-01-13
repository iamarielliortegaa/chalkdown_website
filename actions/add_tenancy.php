<?php
require '../config/db.php';

$sql = "INSERT INTO Tenancy (unit_id, start_date) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['unit_id'], $_POST['start_date']]);

header("Location: ../tenancies.php");
