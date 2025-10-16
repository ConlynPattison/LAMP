<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$file = fopen("password.txt", "r");
$authenticated = false;

while (($line = fgets($file)) !== false) {
    list($storedUser, $storedPass) = array_map('trim', explode(",", $line));
    if ($username === $storedUser && $password === $storedPass) {
        $authenticated = true;
        break;
    }
}
fclose($file);

if ($authenticated) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: secure/index.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}