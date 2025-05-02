<?php
require 'auth.php';
redirectIfNotLoggedIn();

if (!isMember()) {
    echo "Anda tidak memiliki akses ke halaman ini.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman B</title>
</head>
<body>
    <h1>Halaman B (Admin & Member)</h1>
    <a href="index.php">Kembali</a>
</body>
</html>