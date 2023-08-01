<?php
$server="localhost";
$username="root";
$password="root1234";
$db="NS";


$conn=mysqli_connect($server, $username, $password,$db);

$fname=$_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$comment = $_REQUEST["comment"];
$number=$_REQUEST["number"];

if (!$conn) {
    die("connection faild".mysqli_connect_error());
}

$sql="INSERT INTO request(Fname,Lname,email,pnumber,comment) VALUES('$fname','$lname','$email','$number','$comment')";

if (mysqli_query($conn,$sql)) {
   echo"recoded";
}else  echo "error";

mysqli_close($conn);
?>