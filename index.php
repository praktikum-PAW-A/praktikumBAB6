<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <?php if (isset($_SESSION['role'])): ?>
        <p>Anda login sebagai: <?php echo $_SESSION['role']; ?></p>
        <a href="halaman_a.php">Halaman A</a><br>
        <a href="halaman_b.php">Halaman B</a><br>
    <?php endif; ?>
    <a href="halaman_c.php">Halaman C</a><br>
    <?php if (isset($_SESSION['role'])): ?>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</body>
</html>