<?php


 
    


?>

<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <title>Vacation Spot Generator </title>
        
        <style>
            h1, form {
                text-align: center;
               
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        
    </head>
    <body>
            <h1> Next Vacation Spots</h1>
            
           
            
            <form action="program1.php" method="GET"> 
             Number of Cities to Visit:
         <input type="text" name="number" size="5" placeholder=" " value="<?=$_GET["number"]?>"/>
            
        </br> </br>
        
        <!--change id and for-->
            Country to Visit:
            <input type="radio" name="country" value="mexico" id="hlayout"/>  
         <label for="hlayout"><strong>Mexico</strong></label>
         
         <input type="radio" name="layout" value="norway" id="vlayout"/>
         <label for="vlayout"><strong>Norway</strong></label>
         
         <input type="radio" name="layout" value="both" id="vlayout"/>
         <label for="vlayout"><strong>Both</strong></label>
         
         </br></br>
            
             Display Cities to Visit in Alphabetical order:
            <input type="radio" name="layout" value="az" id="hlayout"/>  
         <label for="hlayout">A-Z</label>
            
            <input type="radio" name="layout" value="za" id="hlayout"/>  
         <label for="hlayout">Z-A</label>
         
         </br></br>
         <div>
    <input type="checkbox" id="imageDisplay" name="display" value="image">
    <label for="imageDisplay">display images</label>
  </div>
         
         </br></br>
         <input type="submit" name="submitBtn" value="Display Cities to Visit"/>
         </form>
         
         </br> </br></br> </br>
         
         <table border="1" width="600" align="center">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: checkbox, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>Error is displayed if Number of Cities is not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Error is displayed if Number of Cities is less than 2 or left blank </td>
      <td align="center">5</td>
    </tr>    
   <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>Error is displayed if Number of Cities is greater than 6 AND only one country is selected, or if size is greater than 12 AND country is "Both" </td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Header is displayed with info submitted (number of cities and country to visit) </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>The right number of random cities is displayed when selecting Mexico or Norway as Country </td>
      <td align="center">15</td>
    </tr> 
   	<tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>If selecting "Both" as Country, there must be at least ONE city of each country</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The names are ordered alphabetically as chosen by the user (asc/desc)</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>City images are displayed if corresponding checkbox is checked</td>
      <td align="center">10</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Cities are displayed in a two-column table</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>   
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>
         
    </body>
</html>