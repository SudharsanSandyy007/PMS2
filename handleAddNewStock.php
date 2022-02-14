<?php
$msg = "";


if (isset($_POST['addproduct'])) {
  $filename = $_FILES["productimage"]["name"];
  $tempname = $_FILES["productimage"]["tmp_name"];
  $folder = "image/" . $filename;
  $productname = $_POST["productname"];
  $productprice = $_POST["productprice"];
  $db = mysqli_connect("localhost", "root", "", "productmanagement");

  // Get all the submitted data from the form
  $sql = "INSERT INTO products (productname, productimage, productprice ) VALUES ('$productname','$filename','$productprice')";

  // Execute query
  mysqli_query($db, $sql);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }

  echo $msg;

  header("Location: addnewstock.php");
  exit;


  $result = mysqli_query($db, "SELECT * FROM products");
  while ($data = mysqli_fetch_array($result)) {

?>
    <img src="image/<?php echo $data['productimage']; ?>">
  <?php
  }
}

if (isset($_POST['updateproduct'])) {
  $filename = $_FILES["newproductimage"]["name"];
  $tempname = $_FILES["newproductimage"]["tmp_name"];
  $folder = "image/" . $filename;
  $chooseproduct = $_POST["chooseproduct"];
  $productname = $_POST["newproductname"];
  $productprice = $_POST["newproductprice"];
  $db = mysqli_connect("localhost", "root", "", "productmanagement");

  // Get all the submitted data from the form

  $sql = "UPDATE products SET productname='$productname', productimage='$filename', productprice='$productprice' WHERE productid='$chooseproduct'";

  // Execute query
  mysqli_query($db, $sql);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) {
    $msg = "Updated successfully";
  } else {
    $msg = "Failed to update";
  }

  echo $msg;

  header("Location: addnewstock.php");
  exit;


  $result = mysqli_query($db, "SELECT * FROM products");
  while ($data = mysqli_fetch_array($result)) {

  ?>
    <img src="image/<?php echo $data['productimage']; ?>">
<?php
  }
}
?>