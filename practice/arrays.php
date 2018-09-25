<?php
    $symbols = array("orange", "seven");
    echo $symbols[0];
    
    array_push($symbols,"lemon"); //adds item at end of array
    
    print_r($symbols); //displays whole array
    
    $symbols[] = "grapes"; //adds item at end of array (square brackets are empty)
    
    echo "<hr>";
    print_r($symbols); //displays whole array
    
    $symbols[2] = "bar"; //replaces point in array
     print_r($symbols); //displays whole array
     
     unset($symbols[2]);
     echo "<hr>";
    print_r($symbols); //displays whole array
    
    $symbols = array_values($symbols); //re-indexs array after deleting (removes gaps)
    echo "<hr>";
    print_r($symbols); //displays whole array
    
    sort($symbols); //orders items in arrray (rsort would order from z-a)
    echo "<hr>";
    print_r($symbols); //displays whole array
    
    array_push($symbols, "lemon", "bar"); //adding two or more elements
    
    display_array(); //pass symbols as a parameter so it will display in functio OR define as global variable in function
    
    
    display_random_element();
    
    function display_random_element() {
        
       global $symbols;
       
       echo "<hr>random value: <br>";
       //$randomIndex = rand(0, count($symbols) - 1 );  //rand gives random value -1 is how many elements in array
       //echo $randomIndex;
       //echo $symbols[$randomIndex];
        echo $symbols[rand(0, count($symbols) - 1 )];
       
       for($i=0; $i< count($symbols); $i++) { //count() returns the size of the array
             echo "<img src='../labs/lab2/img/".$symbols[rand(0, count($symbols) - 1 )]." .png' width='70' >"; 
        }
      // echo "<img src='../labs/lab2/img/".$symbols[rand(0, count($symbols) - 1 )]." .png' width='70' >"; // can use 
       
       
       
    }
    
    function display_array() {
        global $symbols;
        echo "<hr>here is content of the array:<br>";
        //print_r($symbols);
        
        for($i=0; $i< count($symbols); $i++) { //count() returns the size of the array
            echo $symbols[$i] . ", ";
        }
        
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