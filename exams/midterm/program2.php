<?php

     include '../../sqlConnection.php';
     $dbConn = getConnection("quotes");
     
    // display quote function begin here
    
    //queries are correct but I dont know how to display them
     //a.
    $sql = "SELECT * FROM `q_quotes` WHERE quote LIKE \'l%\'";
    
     
     //b.
     $sql = "SELECT * FROM `q_author` WHERE  gender = \'M\' and country != \'usa\'";
     
     //c.
     
     
     //d.
     $sql = "SELECT * FROM `q_quotes` WHERE quoteId = 1 || quoteId = 30";
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Program2 Midterm </title>
        <style>
            html {
                text-align: center;
            }
            
            h1 {
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <h3> Program 2: PHP & MySQL</h3>
        
      * display quote function call would go here*
    
    A.)
    
        Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist. Be curious.
        </br>
        Live in the sunshine, swim in the sea, drink the wild air.
        </br>
        Live as if you were to die tomorrow. Learn as if you were to live forever.
        </br>
    
    </br>
        
        
        <footer></footer>
        <div>
            
        <table border="1" width="600" align="center">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#ffffe0">
      <td>1</td>
      <td>All quotes that start with letter "L", in descending order </td>
      <td width="20" align="center">5/10</td>
    </tr>  
    <tr style="background-color:#ffffe0">
      <td>2</td>
      <td>First name, last name and country of all male authors who were not born in the USA, ordered by last name</td>
      <td width="20" align="center">5/15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Author, Quote, and Quote length of the current fifth longest quote in the table</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#ffffe0">
       <td>4</td>
       <td>All quotes in the "Philosophy" category, ordered alphabetically </td>
       <td align="center">5/15</td>
     </tr>
     <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    
  
  </div>
        
        </footer>
    </body>
</html>