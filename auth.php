<?php
session_start();

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isMember() {
    return isset($_SESSION['role']) && ($_SESSION['role'] === 'member' || $_SESSION['role'] === 'admin');
}

function redirectIfNotLoggedIn() {
    if (!isset($_SESSION['role'])) {
        header('Location: login.php');
        exit();
    }
}

function checkRememberMe() {
    if (!isset($_SESSION['role']) && isset($_COOKIE['role'])) {
        $_SESSION['role'] = $_COOKIE['role'];
    }
}
checkRememberMe();
?>