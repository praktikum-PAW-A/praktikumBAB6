<?php
require 'auth.php';
redirectIfNotLoggedIn();

if (!isAdmin()) {
    echo "Anda tidak memiliki akses ke halaman ini.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman A</title>
</head>
<body>
    <h1>Halaman A (Admin Only)</h1>
    <a href="index.php">Kembali</a>
</body>
</html>