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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row["userid"]==$_POST["userid"]){
    if($row["pass"]==$_POST["pass"]){
        echo "LOGGED IN";
        header("Location: Dashboard.php");
        exit;
    }
    else{
        echo "PASSWORD INCORRECT!";
    }
    }
    else{
        echo "INVALID USER ID";
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>