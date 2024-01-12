<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        html{
            background-color:lightskyblue;
        }
        h1{
            margin-top:300px;
        }
        </style>
</head>
<body>
    <?php
$Eventname=$_POST["event"];
$Eventinfo=$_POST["info"];
$Eventplace=$_POST["place"];



$hostname="localhost";
$Username="root";
$Password="";
$database="WATERPARK";
$con=new mysqli($hostname,$Username,$Password,$database);

$sql="INSERT INTO `events`(`eventname`,`eventinfo`,`eventplace`) VALUES ('$Eventname','$Eventinfo','$Eventplace')";


if(mysqli_query($con,$sql))
{
    echo "";
}
else
{
    echo "";
}

?>
<h1><center>RESPONSE SUBMITTED</center></h1>
<center>Click to <a href="admin.php">Continue</a></center>
</body>
</html>