<?php

    $rows = 10; // amout of tr 
$cols = 10;// amjount of td 
function drawTable($rows, $cols){
echo "<table border='1'>"; 

for($tr=1;$tr<=$rows;$tr++){ 

    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td align='center'>".$tr*$td."</td>"; 
        } 
    echo "</tr>"; 
} 

echo "</table>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            html {
                text-align: center;
            }
            
            td {
                text-align:center;
            }
        </style>
        <title> </title>
    </head>
    <body>
        
        <h3> Find the Letter</h3>
        
        <strong> Select the letter to find</strong>
        <form method= "get">
            <select name="letterToFind">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value='L'>L</option>
                <option value='M'>M</option>
                <option value='N'>N</option>
                <option value='O'>O</option>
                <option value='P'>P</option>
                <option value='Q'>Q</option>
                <option value='R'>R</option>
                <option value='S'>S</option>
                <option value='T'>T</option>
                <option value='U'>U</option>
                <option value='V'>V</option>
                <option value='W'>W</option>
                <option value='X'>X</option>
                <option value='Y'>Y</option>
                <option value='Z'>Z</option>
                
            </select>
            
            
            <br /><br />
    		
    		Select Table Size:
    		<select name="tableSize">
    			<option value="6">6x6</option>
    			<option value="7">7x7</option>
    			<option value="8">8x8</option>
    			<option value="9">9x9</option>
    			<option value="10">10x10</option>
    		</select>
    		
    		<br /><br />
    		Select Letter to Omit:
    		<select name="letterToOmit">
    			<option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option value='D'>D</option><option value='E'>E</option><option value='F'>F</option><option value='G'>G</option><option value='H'>H</option><option value='I'>I</option><option value='J'>J</option><option value='K'>K</option><option value='L'>L</option><option value='M'>M</option><option value='N'>N</option><option value='O'>O</option><option value='P'>P</option><option value='Q'>Q</option><option value='R'>R</option><option value='S'>S</option><option value='T'>T</option><option value='U'>U</option><option value='V'>V</option><option value='W'>W</option><option value='X'>X</option><option value='Y'>Y</option><option value='Z'>Z</option>			</select>
			<input type="submit" value="Create Table" name="submit" />
            
        </form>
        
      <?=drawTable(10, 10)?>

    </body>
</html>