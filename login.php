<?php
$quantity = $_POST['quantity'];
$oneprice = $_POST['price'];
$pname = $_POST['pname'];
$totalprice=$oneprice*$quantity;
if (isset($_POST['submit'])) {

$paraforadminphp=$_POST['submit'];

  $server = "localhost";
  $username = "root";
  $passwod = "root1234";
  $db = "NS";

  $conn = mysqli_connect($server, $username, $passwod, $db);

  $email = $_REQUEST["email"];
  $pass = $_REQUEST["pass"];

  if (!$conn) {
    die(mysqli_connect_error());
  }

  $sql = "SELECT * FROM `Client` WHERE email= '$email';";

  $result = mysqli_query($conn, $sql);
  $check = mysqli_num_rows($result);

  if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['password'] == 'notuser123' && $email == 'notuser@gmail.com') {

        header("Location: admin.php?variableName=" . $paraforadminphp);
       
      

      } else if ($row['password'] == $pass) {

        $customer_name= $row['Fname'];
        $address = $row['address'];
        $contact_number = $row['number'];
        $email = $row['email'];
       $ordersql="INSERT INTO `order`(product_name,customer_name,address,contact_number,quantity,price) VALUES('$pname','$customer_name','$address','$contact_number','$quantity','$totalprice');";

        if (mysqli_query($conn, $ordersql)) {
          $to = $email; 
          $subject = "NS bakery";
          $message = "
Dear $customer_name,

Thank you for placing an order with NS bakery. Your order has been successfully received.

Order Details:
Product Name: $pname
Quantity: $quantity
Total Price: $totalprice

For any questions or concerns about your order, please contact our customer support at 0777426101.

Thank you for choosing NS bakery. We look forward to serving you again!

Best regards,
The NS bakery Team";

          $headers = "From:nsbakery200@email.com"; 

         
          if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
          } else {
            echo "Failed to send the email.";
          }
          header("Location: ordersuccess.html");
        } 
       
        

      } else
        header("Location: index.html");
    }
  } else
    header("Location: index.html");

  mysqli_close($conn);
} else
  header("Location: index.html");

?>