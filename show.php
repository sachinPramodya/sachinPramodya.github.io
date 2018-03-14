<?php
require"db_connect.php";
session_start();

$sql="SELECT * FROM upload_user";

$result = $conn->query($sql);


?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<h1>Passenger Page</h1>

<form action="delete.php" method="POST">
<div class="container">
  <table class="table table-bordered">
  <tr>
    
    <th>Name</th>
    <th>FileName</th>
    <th>Delete</th>
     <th>Download</th>
  </tr>
  
<?php
if ($result->num_rows > 0) {
  $no=1;

    while($row = $result->fetch_assoc()) {
    $uname=$row['name'];
    $uid=$row['Id']; 

?>



 <tr>
    <td><?php echo $row['name']; ?></td>
    <td ><img src="<?php echo $row['bookImage']; ?>" height=100px weight=50px></td>
<?php

echo"
    <td ><a href ='delete.php?upname=$uname&uid=$uid'>Delete</a></td>
  
    ";
?>
  <td ><a href ="<?php echo $row['book']?>">Download</a></td>
 </tr>
    
  
 <?php
    }
} else {
    echo "0 results";
}

?>

</table> 

</div>

</form>



</body>
</html>