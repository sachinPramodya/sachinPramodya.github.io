<?php
require"db_connect.php";
session_start();

$name=$_POST["user"];
#$password=$_POST["pwd"];

$sql="SELECT * FROM upload_user_reg WHERE name='$name'";

$result=$conn->query($sql);

if($result->num_rows>0){
#echo"elama";
	$_SESSION['name']=$name;
header('Location:file.html');
}else{
	echo"Error:Register first";
}





?>

