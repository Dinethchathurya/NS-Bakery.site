<?php
if (isset($_GET['variableName'])) {


  $server = "localhost";
  $usename = "root";
  $password = "root1234";
  $dbname = "NS";

  $conn = mysqli_connect($server, $usename, $password, $dbname);
if (!$conn) {
                  die("connection faild" . mysqli_connect_error());
                }

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="img/logo/Logo web.png">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
    <style>
      .tcolor {
        background-color: #fdefef;
      }
    </style>
  </head>

  <body style=" background-image: url(hero.png); background-attachment: fixed;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-3 fixed-column">
          <div class="background-image">

          </div>

          <div class="sidebar">
            <div class="logo"></div>
            <div class="menu">
              <li class="active">
                <a href="#Dashboard">

                  <button class="btn" style="background-color: #D1A29F;" type="button">Dashboard</button>
                </a>
              </li>
              <li>
                <a href="#oders">
                  <button class="btn" style="background-color:#D1A29F;" type="button">Oders</button>
                </a>
              </li>
              <li>
                <a href="#Request">
                  <button class="btn" style="background-color: #D1A29F;" type="button">Request</button>
                </a>
              </li>
              <li>
                <a href="#newp">
                  <button class="btn" style="background-color: #D1A29F;" type="button">New Product</button>
                </a>
              </li>
              <li>
                <a href="#del">
                  <button class="btn" style="background-color: #D1A29F;" type="button">Delete</button>
                </a>
              </li>
            </div>
          </div>
        </div>
        <div class="col-9 scrollable-column">
          <div class="main-content">
            <div id="Dashboard" style="background-color:#fdefef;" class="header--wrapper">
              <div class="header--title">
                <h2 style="color: rgb(239, 133, 57); ">Admin Dashboard</h2>
              </div>

            </div >
          <div class="header--wrapper" id="oders">
            <div class="header--title">
              <h2>Oders</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">Costomer Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">quantity</th>
                  <th scope="col">price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <?php
                  $ordersql = "SELECT * FROM `order`;";
                  $orderresult = mysqli_query($conn, $ordersql);
                $numorder = mysqli_num_rows($orderresult);
                if ($numorder > 0) {
                  while ($orderrow = mysqli_fetch_assoc($orderresult)) {
                    $ordername = (string) $orderrow['product_name'];
                    $customer_name = (string) $orderrow['customer_name'];
                    $address = (string) $orderrow['address'];
                    $contact_number = (string) $orderrow['contact_number'];
                    $quantity = (string) $orderrow['quantity'];
                    $price = (string) $orderrow['price'];

                   echo' <th scope="row">'. $ordername.'</th>
                  <td colspan="1">'. $customer_name.'</td>
                  <td>'. $address.'</td>
                  <td>'. $contact_number.'</td>
                  <td>'. $quantity.'</td>
                  <td>'. $price.'</td>
                  </tr>';
                  }
                }   
                 ?>
               

              </tbody>

            </table>
          </div>
          <br>
          <div class="header--wrapper" id="Request">
            <div class="header--title">
              <h2>Request</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Costomer Name</th>
                  <th scope="col">Request</th>
                  
                  <th scope="col">Contact Number</th>
                 
                </tr>
              </thead>
              <tbody>
                
                  <?php
                  $query3="SELECT * FROM request;";
               
                  $result3 = mysqli_query($conn, $query3);
                  $numrow3 = mysqli_num_rows($result3);
                  if ($numrow3>0) {
                   while ($row3=mysqli_fetch_assoc($result3)) {
                     $name3 = (string) $row3['fname'];
                     $request3=(string) $row3['comment'];
                     $number3=(string)$row3['pnumber'];
                    echo" <tr>
                  <td scope= >".$name3."</td>
                  <td>".$request3."</td>
                  <td>".$number3."</td>
                 
                </tr>";
                   }
                  }
                  ?>

              </tbody>
            </table>
          </div>
          <br>
          <div class="header--wrapper" id="Available Items">
            <div class="card--container">
              <h3 class="main--title">Available Items</h3>
             
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">price</th>
                </tr>
              </thead>
              <tbody style="background-color:#fdefef;">
                <?php
                $sql = "SELECT * FROM Product";

                
                $result1 = mysqli_query($conn, $sql);
                $numrow = mysqli_num_rows($result1);
                if ($numrow > 0) {
                  while ($row = mysqli_fetch_assoc($result1)) {
                    $stname = (string) $row['name'];
                    $stprice = (string) $row['price'];

                    echo '<tr>
                  <td scope="row">' . $stname. '</td>
                  <td>'. $stprice.'</td>
                </tr>';
                  }
                }
                ?>

              </tbody>
            </table>
          </div>
            </div>
          <br>
          <div class="header--wrapper" id="newp">
            <div class="header--title">

            
              <!--ADD New product section -->

              <h2>Add New Product</h2>
            </div>
            <form class="row g-3" method="post" action="addproduct.php">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputEmail4">
              </div>

              <div class="col-12">
                <label for="inputAddress" class="form-label">About</label>
                <input type="text" name="about" class="form-control" id="inputAddress" placeholder="">
              </div>

              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="inputEmail4" placeholder="Rs:">
              </div>

              <div class="col-12">
                <label for="inputAddress" class="form-label">Product image</label>
                <input type="text" class="form-control" name="url" id="inputAddress" placeholder="url/.jpg">
              </div>

              <div class="col-12">
                <button type="submit" class="btn" style="background-color: #D1A29F;"> Add Product </button>
              </div>

            </form>
          </div>

          <br>
          <!--Delete product-->
          <div class="header--wrapper" id="del">
            <div class="header--title">
              <h2>Delete Product</h2>
            </div>

            <form class="row g-3 col-12" method="post" action="deleteproduct.php">
              <div class="col-4">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Product Name" id="inputEmail4">
              </div>


              <div class="col-4">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="inputEmail4" placeholder="Rs:">
              </div>

              <div class="col-12">
                <button type="submit" style="background-color: #D1A29F;" class="btn">Delete</button>
              </div>

            </form>


          </div>
          <br>
          <img src="admin.png" style="width:100%;" alt="">
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
  </body>

  </html>

  <?php

  mysqli_close($conn);
} else {
  header("Location: login.html");
}
?>