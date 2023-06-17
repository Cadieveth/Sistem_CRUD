<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "19n30012";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>