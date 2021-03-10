<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "weblogin";
// $port = 3307;

$connection = mysqli_connect($host, $user, $password, $database,);

if (mysqli_connect_error()) {
  echo "Error: Unable to connect to MySQL <br>";
  echo "Message: ".mysqli_connect_error()."<br>";
}
?>