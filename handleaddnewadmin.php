<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["adminid"];
$pass = $_POST["pass"];

$sql = "INSERT INTO users (userid, pass)
VALUES ('$id', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "Admin added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>