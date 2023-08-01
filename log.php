<?php
$quantity = $_POST['quantity'];
$price = $_REQUEST['chprice'];
$pname = $_REQUEST['chpname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo/Logo web.png">
    <title>NS Bakery Login</title>

</head>

<body class="">
    <div class="min-vh-100 background-image">
        <div class="container px-4">
            <div class="row">
                <div class="col-md-3 align-self-center ">
                </div>
                <div class="col-md-6 my-5 "
                    style="background-color: var(--c-background); border: 1px solid var(--c-secondry2); border-radius: 20px; padding: 20px;">
                    <h1 class="title">Login Form</h1>

                    <body>
                        <form action="login.php" method="post">
                            <?php
                            echo '<input type="hidden" name="pname" value="' . $pname . '">
              <input type="hidden" name="price" value="' . $price . '">
              <input type="hidden" name="quantity" value="' . $quantity . '">';
                            ?>

                            <div class="container registration-container">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" id="form2Example1" name="email" class="form-control" />
                                </div>


                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Password</label>
                                    <input type="password" id="form2Example2" name="pass" class="form-control" />
                                </div>


                                <div class="row mb-4">

                                    <div class="form-check">
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                    </div>
                                </div>

                                <div class="col">

                                    <a href="cantactus.html">Forgot password?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit"
                                    class="btn btn-primary btn-block me-2 px-5 py-2 border-0">Sign in</button>
                            </div>
                            <div class="text-center">
                                <p>Not a member? <a href="register.html">Register</a></p>
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                </div>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>



</html>