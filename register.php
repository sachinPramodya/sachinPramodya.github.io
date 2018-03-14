<?php
require"db_connect.php";
session_start();

$name=$_POST['name'];






$sql = "INSERT INTO upload_user_reg (name)
VALUES ( '$name')";

if ($conn->query($sql) === TRUE) {
   
    header('Location:home.html?registered');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

