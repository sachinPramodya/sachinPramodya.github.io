<?php
require"db_connect.php";
session_start();
$name=$_SESSION['name'];
$upname=$_REQUEST['upname'];
$uid=$_REQUEST['uid'];
var_dump($name);
var_dump($upname);
var_dump($uid);

if($name===$upname){

	$sql="DELETE FROM upload_user WHERE name='$name' && id='$uid'";
    $sql1="SELECT * FROM upload_user WHERE name='$name'";

	if($conn->query($sql)===TRUE){
		echo "Item deleted";
		unlink();//delete from folder

	}else{
		echo "error".$conn->error;
	}

	
}else{
	echo "you don't have permission to delete this";
}

?>