<?php
$pri = $_REQUEST['price'];
$price = (int) $pri;
$productid = $_REQUEST['id'];
$pname = $_REQUEST['name'];
$url = $_REQUEST['url'];
$about = $_REQUEST['about'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/Logo web.png">
    <link rel="stylesheet" href="css/check.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Check out</title>
  </head>
  <body style="background-image: url(hero.png);  background-attachment: fixed;">
    <div class="container-fluid">
      <section class="h-100 h-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                        
                        </div>
                        <hr class="my-4">

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">

                            <?php
                            echo '<img
                        src="' . $url . '"
                        class="img-fluid rounded-3" alt="product">'
                              ?>

                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <?php

                            echo ' <h6" class="text-bold" style="color:#CE3939; ">'.$pname.'</h6>
                      <h6 class="text-muted mb-0">'.$about.'</h6>'
                              ?>

                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <!-- Display the quantity value here -->

                            <?php
                            echo ' <span id="oneproductprice">'.$price.'</span> <span>.00 LKR</span>';
                            ?>

                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">

                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>

                        <hr class="my-4">
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="menu.php" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                              </svg> Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-4">
                         
                         <span class="text-uppercase">items</span>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                         <button class="btn btn-link px-1" onclick="decreaseQuantity()">
                              <i class="fas fa-minus"></i>
                            </button>

                              <form method="POST" action="log.php"> 
                              <input id="quantityInput" min="1" name="quantity" value="1" type="number"
                              class="form-control form-control-sm" oninput="updateDisplayQuantity()" />
                            
                            

                            <button class="btn btn-link px-1" onclick="increaseQuantity()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>

                            <?php
                            echo '
                         <span class="text-uppercase" id="summeryprice">'.$price.'</span>';
                          ?>

                        </div>

                        <h5 class="text-uppercase mb-3">Shipping</h5>

                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Standard-Delivery 50.00</option>
                            <option value="2" disabled>Free Shipping</option>
                          </select>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase">Total price</h5>
                          <?php
                          echo '<span id="total">' .($price + 50). '</span> <span>LKR</span>';
                          echo' </div>
                   
                      <input type="hidden" name="chpname" value="'.$pname.'">
                      <input type="hidden" name="chprice" value="'.$price.'">
                  
                    <a href="log.php">  <button type="submit" class="btn btn-dark btn-block col-lg-8 btn-lg"
                        data-mdb-ripple-color="dark">Register</button>
                     </a> </form>'
                     
                  
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <script>
    function decreaseQuantity() {
      var quantityInput = document.getElementById("quantityInput");
      if (quantityInput.value > 1) {
        quantityInput.stepDown();
        updateDisplayQuantity();
      }
    }

    function increaseQuantity() {
      var quantityInput = document.getElementById("quantityInput");
      quantityInput.stepUp();
      updateDisplayQuantity();
    }

    function updateDisplayQuantity() {

      var quantityInput = document.getElementById("quantityInput").value;
      var oneproductprice = document.getElementById("oneproductprice").innerText;
      //displayprice.textContent = (quantityInput * oneproductprice);
      summeryprice.textContent = (quantityInput * oneproductprice);
     // summeryitemcount.textContent = (quantityInput);
      beforetotal = (quantityInput * oneproductprice);
      total.textContent = beforetotal + 50;
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>