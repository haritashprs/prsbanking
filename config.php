<?php 

$server="localhost";
$username="root";
$password="";
$db="Banking_System";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed error: " .mysqli_connect_error()); //connection not establised
    
?>
