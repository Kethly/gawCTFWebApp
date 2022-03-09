<?php
$host = $_ENV["host"];
$db_name = $_ENV["db_name"];
$username = $_ENV["username"];
$password = $_ENV["password"];
// Create connection
$conn = mysqli_init();
$actual_conn = mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL);
// Check connection
if ($actual_conn->connect_error) {
  die("Connection failed: " . $actual_conn->connect_error);
  echo("Connection Failed!");
}
echo "Connected successfully";