<?php
$servername = "localhost";
$username = "agrimabahadur";
$password = "agrimab@321";
$dbname = "agrima";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>