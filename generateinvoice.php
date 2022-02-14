<?php

$msg = "";


if (isset($_POST['generateinvoice'])) {
  $chooseproduct = $_POST["chooseproduct"];
  $noofitems = $_POST["noofitems"];
  $buyer = $_POST["buyer"];
  echo "buyer:".$buyer;
  $db = mysqli_connect("localhost", "root", "", "productmanagement");

  // Get all the submitted data from the form
  $sql = "INSERT INTO invoices (productid, noofitems, buyer ) VALUES ('$chooseproduct','$noofitems','$buyer')";

  // Execute query
  mysqli_query($db, $sql);

}


?>