<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    
<?php

$User=$_POST['username'];
$Pass=$_POST['password'];

$hostname="localhost";
$Username="root";
$Password="";
$database="WATERPARK";
$con=new mysqli($hostname,$Username,$Password,$database);

$sql1="SELECT * FROM `login` WHERE Username='$User' and Password='$Pass'";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)==1)
{
    echo"  ".include('event.php');
    
}
 

else{
    echo"<h1>INVALID LOGIN</h1>";
}

?>



</body>
</html>