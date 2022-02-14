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
        .add{
            background-color: white;
            color: black;
            margin: 20px;
            margin-top: 100px;
            border-radius: 10px;
        }

        .add > center > h1{
            margin: 15px;

        }
        .add > form{
            padding: 50px 100px;
            display: flex;
            flex-direction: column;

        }

        input{
            padding: 10px;
        }

        label{
            font-size: 20px;
            font-weight: 600;
        }
        .addnewstock{
            display: grid;
            place-items: center;
        }

        #addnew__btn {
        width: 260px;
        border: 2px solid #89d4cf;
        background-color: rgb(230, 35, 67);
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
      }
      #addnew__btn:hover {
        transform: scale(1.1);
      }

      <?php //UPDATE----------- ?>
        .update{
            background-color: white;
            color: black;
            margin: 20px;
            border-radius: 10px;
        }

        .update > center > h1{
            margin: 15px;

        }
        .update > form{
            padding: 50px 100px;
            display: flex;
            flex-direction: column;

        }

        input{
            padding: 10px;
        }

        label{
            font-size: 20px;
            font-weight: 600;
        }

        #updateproduct {
        width: 260px;
        border: 2px solid #89d4cf;
        background-color: rgb(230, 35, 67);
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
      }

      select{
          padding: 10px;
      }

      #updateproduct:hover {
        transform: scale(1.1);
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

<div class="addnewstock">
    <div class="add">
         <center><h1>Add new Product</h1></center>
        <form action="handleAddNewStock.php" enctype="multipart/form-data" method="POST">
            <label for="productname">Enter Product Name:</label>
            <input type="text" name="productname" id="productname"> <br>
            <label for="productimage">Product Image: </label>
            <input type="file" name="productimage" id="productimage"> <br>
            <label for="productprice">Price:</label>
            <input type="text" name="productprice" id="productprice"> <br>
            <input type="submit" id="addnew__btn" name="addproduct" value="ADD PRODUCT">
        </form>
    </div>
    <br><br><br><br>

    <div class="update">

        <center> <h1>Update Existing Product</h1> </center>
        <form action="handleAddNewStock.php" enctype="multipart/form-data" method="POST">
            <label for="newproductname">Choose Product:</label>
            <select name="chooseproduct" id="chooseproduct">
    
            <?php
            $db = mysqli_connect("localhost", "root", "", "productmanagement");
    
            $result = mysqli_query($db, "SELECT * FROM products");
            while ($data = mysqli_fetch_array($result)) {
            
            ?>
                   <option value="<?php echo $data['productid']; ?>"> <?php echo $data['productname']; ?></option>
                   <?php
            }
            ?>
            </select>
            <br>
            <label for="newproductname">Product's New Name: </label>
            <input type="text" name="newproductname" id="newproductname"> <br>
            
            <label for="newproductimage">New Product Image: </label>
            <input type="file" name="newproductimage" id="newproductimage"> <br>
            <label for="newproductprice">New Price:</label>
            <input type="text" name="newproductprice" id="newproductprice"> <br>
            <input type="submit" id="updateproduct" name="updateproduct" value="Update PRODUCT">
        </form>
    </div>

    </div>
</body>
</html>