<?php
session_start();
require 'config/db.php';
if (!isset($_SESSION['user'])) header("Location: auth/login.php");

$tenancies = $pdo->query("SELECT COUNT(*) FROM Tenancy")->fetchColumn();
$payments = $pdo->query("SELECT SUM(amount) FROM RentPayment")->fetchColumn();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Dashboard</h1>

<div class="grid">
    <div class="card">Active Tenancies<br><strong><?= $tenancies ?></strong></div>
    <div class="card">Total Rent Received<br><strong>£<?= $payments ?></strong></div>
</div>

<nav>
    <a href="tenancies.php">Tenancies</a>
    <a href="payments.php">Payments</a>
    <a href="reports.php">Reports</a>
    <a href="logout.php">Logout</a>
</nav>

</body>
</html>
