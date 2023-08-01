<?php

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Ns Bakery Menu</title>
  <link rel="icon" href="img/logo/Logo web.png">
  <link rel="stylesheet" href="css/menustyle.css">
  
</head>

<body onload="registerfirst()">
  

     <!--Navbar section start-->
     <div class="backcolor">
        <nav class="navbar navbar-expand-lg navbar-light  ">
          <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/logo/Logo web.png" height="auto" width="250"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu.php?id=123">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="AboutUs.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.html">My Account</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary mx-2 px-5 py-2 border-0" href="menu.html">Order Now</a>
              </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
      
      <!--Navbar section end-->
  


<div class="backcolor section-padding pt-5">

      <h1 class="title"> Our Menu</h1>
                <div class="items ">
                  
<?php

$query="SELECT * FROM Product;";

$result=mysqli_query($conn,$query);
 $numrow = mysqli_num_rows($result);

if($numrow>0){
  while ($row = mysqli_fetch_assoc($result)) {
  $productid=(string)$row['idProduct'];
  $name=(string)$row['name'];
  $about=(string)$row['about'];
  $price=(string)$row['price'];
  $url=(string)$row['url'];
  
  echo'<div class="card text-center" style="width: 18rem;">
                    <img src="'.$url.'" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$name.'</h5>
                      <p  class="card-text">'.$price.' LKR</p>

                      <form method="POST" action="checkout.php"> 
                      <input type="hidden" name="id" value="' . $productid . '">
                      <input type="hidden" name="name" value="' . $name . '">
                      <input type="hidden" name="price" value="' . $price. '">
                      <input type="hidden" name="about" value="' . $about . '">
                      <input type="hidden" name="url" value="' . $url . '">

                      <button class="btn btn-primary" name="submit" type="submit" >BUY NOW </button>
                      </form>
                    </div>
                  </div>';

 }

}

mysqli_close($conn);
?>
 </div>

                
  </div>

</div>

 <!-- Footer Start-->
 <footer id="hero" class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <img src="img/logo/Logo.png" width="350" height="auto">
            <br><br>
            
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 style="color: var(--c-primary);" class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="index.html" class="text-reset">Home</a>
            </p>
            <p>
              <a href="menu.html" class="text-reset">Menu</a>
            </p>
            <p>
              <a href="AboutUs.html" class="text-reset">About us</a>
            </p>
            <p>
              <a href="contactus.html" class="text-reset">Contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">My Account</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 style="color: var(--c-primary);" class="text-uppercase fw-bold mb-4">Contact</h6>
            <p style="font-weight: 500;">NSBM Green University, Pitipana</p>
            <p style="font-weight: 500;">contact@nsbakery.com</p>
            <p style="font-weight: 500;">+94 071 9298 566</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="font-weight: 600; background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright
      <a class="text-reset fw-bold" >NS Bakery</a>
    </div>
    <!-- Copyright -->
  </footer>
  
  
  <!-- Footer end-->
  
<script>
  function registerfirst(){
    alert("If you're not registered, please register and create an account before continuing.");
  }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>
</div>
</body>

</html>