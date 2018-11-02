<?php

    session_start();

     include '../../sqlConnection.php';
     $dbConn = getConnection("midterm");
    
     
        function displayMidtermInfo() {
          global $dbConn;
        
        $midtermInfo = $_GET['midtermInfo'];
 

        $sql = "SELECT * FROM mp_town WHERE population BETWEEN 50000 AND 80000";
        
        $sql = "SELECT * FROM `mp_town` ORDER BY population DESC";
        
        $sql = "SELECT * FROM mp_town WHERE population < 23000";
        
        $sql = "SELECT * FROM `mp_county` WHERE county_name LIKE \'s%\'";
        
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC); //We expect only ONE record
        
         print_r($record);
         
         echo "population between". $record['population'];
        
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>