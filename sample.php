<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING CONFIRMATION</title>
    <link rel="stylesheet" href="sample.css">
    <style>
      .one{
         text-align:center;
         margin-top:200px;
         border:1px solid;
         box-shadow:6px 6px 1px 5px ;
         width:500px;
         height:200px;
         margin-left:400px;
         border radius:50%;
         padding:20px;
         
      }
      body{
         background:radial-gradient(lightgreen ,lightskyblue,blue);
      
      }
      button{
         border:none;
         margin-top:15px;
         background-color:lightskyblue;
         background:green;
      }
      button a{
         text-decoration:none;
         color:white;
      }
      button:hover{
         background:red;
         
      }
      </style>
</head>
<body>
    <h1><center>BOOKING CONFIRMATION</center></h1>
    <div class="one">

        <?php

        $name=$_POST['name'];
        $date=$_POST['date'];
        $adult=$_POST['ticket'];
        $child=$_POST['cticket'];
        $Name=strtoupper($name);

        $tadult=900*$adult;
        $tchild=750*$child;
        $total=$tadult+$tchild;

        echo"<h2> WELCOME $Name </h2>";

        
            
              echo"  NO OF TICKETS FOR ADULT(900): $adult ";
            echo"<br>";
           
             echo" TOTAL COST FOR ADULTS: $tadult";
          echo"<br>";
         
             echo" NO OF TICKETS FOR CHILDRENS(750): $child";
          echo"<br>";
          
             echo" TOTAL COST FOR CHILDRENS: $tchild";
          echo"<br>";
          
             echo" TOTAL : $total";
          echo"<br>";
          
          echo"<button id='payment'><a href='thanks.php'>CONTINUE</a></button>";


        ?>
    </div>
</body>
</html>