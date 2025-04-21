<?php
$host = "localhost";
$dbname = "login_system";
$user = "root";
$pass = "root";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
