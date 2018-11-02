<?php

    include '../../sqlConnection.php';
    $dbConn = getConnection("quotes");
    
    function displayAuthorInfo() {
    global $dbConn;

    $authorId = $_GET['authorId'];
  
     $sql = "SELECT * FROM q_author WHERE authorId = $authorId";
     
    $stmt = $dbConn->prepare($sql);
     $stmt->execute();
  $record = $stmt->fetch(PDO::FETCH_ASSOC); //We expect only ONE record
  
    // print_r($record);
     
    echo "<strong>Bio: </strong> " . $record['bio'] . "<br>";
  echo "<strong>Day of Birth: </strong> " . $record['dob'] . "<br>";
  echo "<strong>Day of Death: </strong> ". $record['dod'] . "<br>";
  echo "<img src='".$record['picture']."'/>";
 
}

    

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        
        <title>Author Info </title>
    </head>
    <body>
        <h2>Author Info</h2>
        
        <br>
        
         <?=displayAuthorInfo()?>
    </body>
</html>