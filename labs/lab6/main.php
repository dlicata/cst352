<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1>Admin Section</h1>
          Welcome <?= $_SESSION['adminName'] ?>
    </body>
</html>