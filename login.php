<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['role'] = 'admin';
        if ($remember) {
            setcookie('role', 'admin', time() + (86400 * 30), "/");
        }
        header('Location: index.php');
        exit();
    } elseif ($username === 'member' && $password === 'member123') {
        $_SESSION['role'] = 'member';
        if ($remember) {
            setcookie('role', 'member', time() + (86400 * 30), "/");
        }
        header('Location: index.php');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>