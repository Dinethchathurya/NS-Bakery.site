<?php
$quantity = $_POST['quantity'];
$oneprice = $_POST['price'];
$pname = $_POST['pname'];
$server="localhost";
$usename="root";
$password="root1234";
$dbname="NS";

$conn=mysqli_connect($server,$usename,$password,$dbname);

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$uname = $_REQUEST["uname"];
$pass = $_REQUEST["pass"];
$addres = $_REQUEST["address"];
$zip=$_REQUEST["zip"];
$tele = $_REQUEST["tele"];
$email=$_REQUEST["email"];

if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
}
$sql="INSERT INTO Client(Fname,Lname,username,password,email,address,number,zip) VALUES('$fname','$lname','$uname','$pass','$email','$addres','$tele','$zip');";

if (mysqli_query($conn,$sql)) {
   header("Location: menu.php");
}else echo"error";

mysqli_close($conn);
?>