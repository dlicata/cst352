<?php
    $deck = range(1,52); //more efficinet than an array listing numbers 1-52
    shuffle($deck);
    
    print_r($deck);
    for($i = 1; $i<6; $i++) {
        echo array_pop($deck) . " ";
    }
    echo "<hr>";
    print_r($deck);
    
    function hand(){
        global $deck;
        for($i =1; $i < 6; $i++) {
            $lastCard = array_pop($deck);
            $faceValue = $lastCard % 13;
            
           // echo $faceValue . "-";
            
           // echo $lastCard . " ";
           if($faceValue==0){
               $faceValue = 13;
           }
           $suit = array("clubs","spades","diamonds","hearts");
           echo "<img src='cards/$suit/$faceValue.png' alt='$faceValue' title='$faceValue' />";
        
        }
    }
//divide by 13 -club 1-diam 2-hear 3-spad
    function displayCard(){
        
        $suit = array("clubs","spades","diamonds","hearts");
        for($i=1;$i<=5; $i++)
        {
            $card = rand(1,13);
        echo "<img src ='cards/".$suit[rand(0,3)]."/$card.png' alt='$card' title='$card'/>";
    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <style type="text/css">
            h1, h2, body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points</h2>
        <?php
       // displayCard();
       echo "Player 1:" ;
       hand();
       echo "<br/>";
       
       
       echo "Player 2:" ;
       hand();
        echo "<br/>";
        
        ?>
        
    </body>
</html>