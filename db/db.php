<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customshoes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conncetion failed: " . $conn->connect_error);
}
?>