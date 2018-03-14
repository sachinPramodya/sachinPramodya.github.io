<?php
session_start();
#var_dump($_SESSION['name']);
require"db_connect.php";
if(isset($_POST['submit'])){

$user=$_SESSION['name'];

	$fileName=$_FILES['file']['name'];
	$fileNameTmp=$_FILES['file']['tmp_name'];
	$fileError=$_FILES['file']['error'];
	$filesize=$_FILES['file']['size'];
//image
	$fileExteI=explode('.', $fileName[0]);
	$exeArrayI=array('jpg','jpge','png','JPG','PNG','txt','TXT');
    //print_r($fileName[1]);
//content
	$fileExteC=explode('.', $fileName[1]);
	$exeArrayC=array('pdf','zip','ZIP');

	if(in_array(end($fileExteI),$exeArrayI) && in_array(end($fileExteC),$exeArrayC)){//check 1para vs 2nd one


		if($filesize[1] < 1024*1024*300){
			$fileDestitationI='uploads/'.$fileName[0];
			$fileDestitationC='uploads/'.$fileName[1];
			move_uploaded_file($fileNameTmp[0], $fileDestitationI);
			move_uploaded_file($fileNameTmp[1], $fileDestitationC);

			$sql="INSERT INTO upload_user(name,bookImage,book) VALUES('$user','$fileDestitationI','$fileDestitationC') ";
			if ($conn->query($sql) === TRUE) {
			echo "New record added";
			}
			else {
			echo "Error: ". $conn->error;
			}


       }else{
		echo "Error: file exceed size!";
	    }

	}else{
		echo "Error: this type is not allowed!";
	}

}else{

}



?>

















