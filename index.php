<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="indexx.css">
    <style>
        .footer{
        background-color: black;
        color: antiquewhite;
        margin-top:5px;
    }
    body{
        background-color:#d3e8e7;
    }
    .last{
        border:5px solid gray;
        width:40%;
        
    }
    </style>
   
</head>
<body>
<div class="header">
    <?php
include('nav.php')
    ?>
    </div>
    
    <div class="four">
    <p class="para1">Welcome to <b>WATERPARK</b>, where waves of excitement and splashes of joy come together to create an unforgettable water adventure! Nestled in the heart of fun,  it's a symphony of aqua-thrills, laughter, and relaxation for the entire family. Dive into a world where every splash is a moment to remember, and every twist and turn promise an aquatic journey like no other.</p>

<p>At WATERPARK, our mission is to provide you with an oasis of enjoyment, where the sun, water, and boundless entertainment combine to create an atmosphere of pure bliss. From heart-pounding rides to serene lagoons, our waterpark is designed to cater to all ages and preferences, ensuring that everyone finds their perfect slice of aquatic paradise.</p>

<p>Join us on a voyage where the only currency is laughter, and the memories made are as timeless as the tides. Get ready to embark on a wet and wild expedition as waterpark invites you to immerse yourself in a world where the only limit is your imagination.</p>

<p>So, grab your swimsuit, sunscreen, and a sense of adventure because at AquaQuest, the fun flows endlessly, and the excitement never dries up. Welcome to the ultimate aquatic escape  where the thrill begins and the waves of joy never cease!</p>
    </div><div class="one">
        <img src="1.jpeg">
        
        </div>
            <center><h1>UPCOMING EVENTS</h1></center><br><br><br>
            <div class="last">
        <?php
        $hostname="localhost";
$Username="root";
$Password="";
$database="WATERPARK";
$con=new mysqli($hostname,$Username,$Password,$database);
$sql="SELECT * FROM events";
$result=mysqli_query($con,$sql);

while($data=$result->fetch_assoc())
{
   echo"<br>";
    echo"<h2>Event Name:".$data['eventname']."</h2>";
    echo"<br>";
    echo"<h2>Event Info:".$data['eventinfo']."</h2>";
    echo"<br>";
    echo"<h2>Event Place:".$data['eventplace']."</h2>";
    echo"<hr>";
}


?>
</div><br>





    <div class="footer">
    <center>WATERPARK-A Water theme park</center>
    <center>R N pudur,Covai mainroad-638990.</center>
    <center>Reach us at Waterpark@gamil.com/  Reservation:9876543110/ Stay:8765431109</center>
    </div>

    
    
</body>
</html>