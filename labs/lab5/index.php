<?php
//creating connection to database
include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function displayAllQuotes() {
    global $dbConn;
    
    $sql = "SELECT * FROM q_quotes";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        
    }//end Foreach
    
} //endFunction

function displayRandomQuote() {
    global $dbConn;
    
    $randomRecord = rand(0,26);
    $sql = "SELECT * FROM q_quotes 
            NATURAL JOIN q_author  
            LIMIT $randomRecord,1";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
     foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        echo "<a target='authorinfo' href='authorinfo.php?authorId=".$record['authorId']."'>";
        echo  $record['firstName'] . "  " . $record['lastName'];
        echo "</a>";
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        
        <title> Lab 5: Random Famous Quote </title>
    </head>
    <body>

        <h1> Random Famous Quote </h1>
    
    <p> " "</p>

        <?= displayRandomQuote() ?>
        
        
        <br><br>
        
        <iframe name= "authorinfo" frameborder="0" width="600" height="700"> </iframe>


    </body>
    </html>