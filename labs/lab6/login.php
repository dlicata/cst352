<?php
session_start();

// if(empty($_SESSION['username'])) {
//  echo 'incorrect username/ password please try again.' ;
// }
 
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <h1> Admin Login</h1>
        
        <form action="loginProcess.php" method="post">
            Username: <input type="text" name="username"/><br>
            Password: <input type="password" name="password"/><br>
            
            <input type="submit" value="Login"/>
            
        </form>


    </body>
</html>