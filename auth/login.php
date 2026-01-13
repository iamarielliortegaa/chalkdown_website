<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['user'] = 'admin';
        header("Location: ../dashboard.php");
        exit;
    }
    $error = "Invalid login";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="center">
<form method="post" class="card">
    <h2>Chalkdown Housing Co-operative</h2>
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button>Login</button>
    <p><?= $error ?? '' ?></p>
</form>
</body>
</html>
