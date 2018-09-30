<?php
    $deck = range(1,52); //more efficinet than an array listing numbers 1-52
    shuffle($deck);
    
    // print_r($deck);
    // for($i = 1; $i<6; $i++) {
    //     echo array_pop($deck) . " ";
    // }
    //echo "<hr>";
    //print_r($deck);
    
    $suit = array("clubs","spades","diamonds","hearts");
    $totalPoints = 0;
    
    function hand(){
        global $deck, $suit, $totalPoints; //suit is outside of function
        $aceCounter = 0;
        $pointCounter = 0;
        
        for($i =1; $i < 6; $i++) {
            $lastCard = array_pop($deck);
            $faceValue = $lastCard % 13;
            
           // echo $faceValue . "-";
            
           // echo $lastCard . " ";
           if($faceValue==0){
               $faceValue = 13;
           }
          $indexSuit = ($lastCard-1)/13;

        $pointCounter = $pointCounter + $faceValue;
          if($faceValue==1) {
              echo "<img src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' height='150' width='150' title='$faceValue' class='ace' />";
         $aceCounter++; 
          } else {
           echo "<img src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' height='150' width='150' title='$faceValue' />";
          }
        }
        echo "Points: " . $pointCounter;
        
        $totalPoints += $pointCounter;
        
        return $aceCounter;
    }
//divide by 13 -club 1-diam 2-hear 3-spad
    function displayCard(){
        $suit = array("clubs","spades","diamonds","hearts");
        
        for($i=1;$i<=5; $i++){
            $card = rand(1,13);
        echo "<img src ='cards/".$suit[rand(0,3)]."/$card.png' alt='$card' height='300' width='300' title='$card'/>";
      }
    }
    
    function displayWinner($p1,$p2) {
        global $totalPoints;
        
        if($p1 > $p2) {
            echo "Player 1 wins $totalPoints Points";
        } else if($p1 < $p2){
            echo "Player 2 wins $totalPoints Points";
        } else {
            echo "Tie game";
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <link rel="stylesheet" href="/cst352/labs/lab3/style.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points</h2>
        
      <p>
        <?php
       // displayCard();
      
       echo "Player 1:" ;
       $p1= hand();
       echo "<br/>";
      
       
       echo "PC:  " ;
       $p2= hand();
        echo "<br/>";
        
        ?>
        </p>
         
        <h2>
            <?=displayWinner($p1, $p2)?>
        </h2>
        
    </body>
</html>