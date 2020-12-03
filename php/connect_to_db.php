<?php
// Datele de conectare trebuie modificate
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "ajutordeprogramator";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>