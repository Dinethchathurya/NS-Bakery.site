<?php
$server="localhost";
$username="root";
$password="root1234";
$db="NS";

$conn=mysqli_connect($server,$username,$password,$db);

$name=$_REQUEST["name"];
$about=$_REQUEST["about"];
$price=$_REQUEST["price"];
$url=$_REQUEST["url"];

  if (!$conn) {
    die("connection faild" . mysqli_connect_error());
  }

$sql="INSERT INTO Product(name,about,price,url) VALUES('$name','$about','$price','$url');";


if(mysqli_query($conn,$sql)){
  echo"recoded";
}else {
  echo "error";
}

mysqli_close($conn);
?>