<?php

    function getRandomColor() {
        
        echo "rgba(".rand(0,255). ",".rand(0,255). ",".rand(0,255). ", ".(rand(0,10)/10). " );";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Colors </title>
        
        <style>
            
            body {
                
                
                <?php
                
                    $red = rand(0,255); /*numbers dont use double quotes*/
                    
                    $alpha = rand(0,1);
                
                    echo "background-color: rgba($red,".rand(0,255). ",".rand(0,255). ", ".(rand(0,10)/10). " );"; /*$green,$blue,$alpha */
                
                ?>
                
                
            }
            
            h1 {
                
                 <?php
                
                    $red = rand(0,255); /*numbers dont use double quotes*/
                    
                    $alpha = rand(0,1);
                
                    echo "background-color: rgba($red,".rand(0,255). ",".rand(0,255). ", ".(rand(0,10)/10). " );"; /*concatenate functions*/
                    echo "color: rgba($red,".rand(0,255). ",".rand(0,255). ", ".(rand(0,10)/10). " )";
                
                ?>
                
            }
            
            h2 {
                background-color: <?php getRandomColor() ?>; 
                
                color: <?= getRandomColor() ?>; /*php shortcut*/
            }
            
            h3 {
                background-color: <?= getRandomColor() ?>;
                
                color: <?= getRandomColor() ?>;
            }
            
           
            
            
        </style>
    </head>
    <body>
        <div class="header">
        <h1>
            Welcome!
        </h1>
        
        <h2>
            Random colors!
        </h2>
        
        <h3>
            wow
        </h3>
    </body>
</html>