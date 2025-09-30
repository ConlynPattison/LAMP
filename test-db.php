<?php
include "./includes/db.php";

// create connection
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error) {
        die("Connection to mysql failed: " . $conn->connect_error);
}
echo "Connected to mysql successfully";
?>