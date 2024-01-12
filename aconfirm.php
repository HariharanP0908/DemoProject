<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING CONFIRMATION</title>
    <link rel="stylesheet" href="confirm.css">
</head>
<body>
    <h1><center>BOOKING CONFIRMATION</center></h1>
    <div class="one">
        <?php

        $name=$_POST['name'];
        $date=$_POST['date'];
        $adult=$_POST['ticket'];
        $child=$_POST['cticket'];

        $tadult=900*$adult;
        $tchild=750*$child;
        $total=$tadult+$tchild;

        echo"<h2> WELCOME $name </h2>";

        echo"<form action='thanks.php'>";
        echo"<table>";
            echo"<tr>";
              echo"  <td>NO OF TICKETS FOR ADULT: $adult</td>";
            echo"</tr>";
            echo"<tr>";
             echo" <td>TOTAL COST FOR ADULTS: $tadult</td>";
          echo"</tr>";
          echo"<tr>";
             echo" <td>NO OF TICKETS FOR CHILDRENS: $child</td>";
          echo"</tr>";
          echo"<tr>";
             echo" <td>TOTAL COST FOR CHILDRENS: $tchild</td>";
          echo"</tr>";
          echo"<tr>";
             echo" <td>TOTAL : $total</td>";
          echo"</tr>";
          echo"<tr>";
             echo" <td> </td>";
          echo"</tr>";


        echo"</table>";
        echo"</form>";

        ?>
    </div>
</body>
</html>