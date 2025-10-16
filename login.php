<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
</head>

<body>
    <h2>Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">Invalid username or password.</p>
    <?php endif; ?>

    <form method="POST" action="authenticate.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
        <a href="/index.php"><button type="button">Home</button></a>
    </form>
</body>

</html>