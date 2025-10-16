<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Secure Area</title>
</head>

<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>This is the secure section of the website.</p>

    <h3>Current Users</h3>
    <ul>
        <li>Mary Smith</li>
        <li>John Wang</li>
        <li>Alex Bington</li>
        <li>Sarah Lopez</li>
    </ul>

    <nav>
        <a href="../logout.php">Logout</a>
        <a href="/index.php">Home</a>
    </nav>
</body>

</html>