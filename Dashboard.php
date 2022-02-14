<!DOCTYPE html>
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
        max-width: 100vw;
        }
        .dashboard___body{
            display: grid;
            place-items: center;
        }
        select{
            margin: 10px;
            width: 180px;
        }
        input, select{
            padding: 10px;
        }
        label{
            font-size: 20px;
            font-weight: 600;
        }
        .dashboard__bodyContainer{
            background-color: white;
            color: black;
            border-radius: 10px;
            margin: 50px;

            padding: 0px 70px 70px 70px;
            
        }
        .dashboard__formBody {
            padding: 10px;
        }
        .dashboard__containerTop{
            margin: 20px;
        }

        .dashboardFormOption{
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
            justify-content: space-between;
        }
        
        input{
            margin-top: 10px;
        }

        #generateinvoice__btn{
            border: 2px solid #89d4cf;
        background-color: rgb(230, 35, 67);
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
        width: 250px;
      }
      
      #generateinvoice__btn:hover {
        transform: scale(1.1);
      }
    </style>
</head>

<body>
    <div class="dashboard">
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
    </div>

        <div class="dashboard___body">
        <div class="dashboard__bodyContainer">

        <div class="dashboard__containerTop">
            <center>
                <h1>GENERATE INVOICE</h1>
            </center>
        </div>
        <div class="dashboard__formBody">

    <form action="generateinvoice.php" enctype="multipart/form-data" method="POST">
    
    <div class="dashboardFormOption">
        
        <label for="chooseproduct">Choose Product:</label>
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
    </div>
        <br>
        <div class="dashboardFormOption">
            <label for="newproductprice">No. of items:</label>
            <input type="text" name="noofitems" id="noofitems"> <br>
        </div>

        <div class="dashboardFormOption"> 
            <label for="buyer">To:</label>
            <input type="text" name="buyer" id="buyer"> <br>
        </div>
        <div class="dashboardFormOption">
            <input type="submit" id="generateinvoice__btn" name="generateinvoice" value="GENERATE INVOICE">
        </div>
    </form>
    </div>


        </div>
        </div>
    
</body>

</html>