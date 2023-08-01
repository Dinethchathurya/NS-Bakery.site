<?php
$server = "localhost";
$usename = "root";
$password = "root1234";
$dbname = "NS";

$conn = mysqli_connect($server, $usename, $password, $dbname);

$name=$_REQUEST["name"];
$price=$_REQUEST["price"];

if (!$conn) {
    die("connection faild".mysqli_connect_error());
}
 $sql="DELETE FROM Product WHERE name = '$name' AND price = '$price';";
 if(mysqli_query($conn,$sql)){
echo "recoded";
 }else echo "faild";
mysqli_close($conn);
?>