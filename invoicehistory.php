
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
            body{
            background-color: #89d4cf;
        background-image: linear-gradient(315deg, #89d4cf 0%, #6e45e1 74%);
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        color: white;
        }
        
        table{
            padding: 10px;
            border: 2px solid black;
            margin: 50px;
        }

        tr,td,th{
            padding: 10px;
            border: 2px solid #89d4cf;
            font-weight: 600;
            font-size: 20px;
        }

        
    </style>
</head>
<body>
<div class="navbar">
            <div class="navbar__left">
                <h1>PRODUCT MANAGEMENT SYSTEM</h1>
            </div>
            <div class="navbar__right">
            <a href="Dashboard.php">
                    <div class="navbar__rightOption">
                        DASHBOARD
                    </div>
                </a>
                <a href="addnewstock.php">
                    <div class="navbar__rightOption">
                        ADD NEW STOCKS
                    </div>
                </a>
                <a href="invoicehistory.php">
                    <div class="navbar__rightOption">
                        INVOICE HISTORY
                    </div>
                </a>
                <a href="addnewadmin.php">
                    <div class="navbar__rightOption">
                        ADD NEW ADMIN
                    </div>
                </a>
            </div>

        </div>

        <div class="invoicehistory">
            <center>
                <br><br><br>

                <h1>INVOICE HISTORY</h1>

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

$sql = "SELECT * FROM invoices";
$result = $conn->query($sql);

?>

<table border="1">
    <tr><th>Invoice Number</th> <th>Product ID</th> <th>No.Of Items</th> <th>Buyer</th></tr>

    
<?php

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row["invoice_num"]; ?></td>
        <td><?php echo $row["productid"]; ?></td>
        <td><?php echo $row["noofitems"]; ?></td>
        <td><?php echo $row["buyer"]; ?></td>
        
</tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</table>
            </center>


        </div>
</body>
</html>