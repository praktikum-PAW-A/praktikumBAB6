<?php
session_start();
session_destroy();
setcookie('role', '', time() - 3600, "/");
header('Location: login.php');
exit();
?>