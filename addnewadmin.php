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
        }
        .addnewadmin{
            background-color: white;
            color: black;
            margin: 20px;
            margin-top: 100px;
            border-radius: 10px;
        }

        .addnewadmin > center > h1{
            margin: 15px;

        }
        .addnewadmin > form{
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
        .addnewadmin__container{
            display: grid;
            place-items: center;
        }

        #addadmin {
        width: 260px;
        border: 2px solid #89d4cf;
        background-color: rgb(230, 35, 67);
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
      }
      #addadmin:hover {
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

        <div class="addnewadmin__container">
        <div class="addnewadmin">
                <center>
                    <h1>ADD NEW ADMIN</h1>
                </center>
                <form action="handleaddnewadmin.php" method="post" >

                <label for="adminid">Enter id:</label>
                <input type="text" name="adminid" id="adminid"> <br>
                <label for="pass">Enter password</label>
                <input type="text" name="pass" id="pass"> <br>
                <input type="submit" id="addadmin" name="addadmin" value="ADD ADMIN">
                </form>
           
            </div>
        </div>