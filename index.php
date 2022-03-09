<?php
$host = $_ENV["host"];
$db_name = $_ENV["db_name"];
$username = $_ENV["username"];
$password = $_ENV["password"];
// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo("Connection Failed!");
}
echo "Connected successfully";