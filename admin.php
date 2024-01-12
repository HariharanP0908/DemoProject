<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    <?php include('nav.php')?><br>
    <h2><center>ADMIN LOGIN</center></h2>
    <div class="container">
        
        <div class="out">
            <form action="change.php" method="post">
                <div class="table">
                    <table>
                    <tr>
                       
                        <td><input type="text" name="username" placeholder="USERNAME" required>
                    </tr>
                    <tr>
                        
                        <td><input type="password" name="password" placeholder="PASSWORD" required></td>
                    </tr>
                    <tr>
                        <td><button>SUBMIT</button></td>
                    </tr>
</table>
                </div>
</form>
        </div>
    </div>
</body>
</html>