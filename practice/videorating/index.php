<?php
 if (isset($_GET['rateForm'])) {

 include '../../sqlConnection.php';
 $dbConn = getConnection("video");

   $sql = "INSERT INTO ratings (rating) 
   VALUES (".$_GET['rating'].");";
   
  
  $stmt = $dbConn->prepare($sql);                 
  $stmt->execute($namedParameters); 
  
  echo  "<script> console.log('rating added')</script>";
  
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
</head>

<body>
    <h1>Rate this video:</h1>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/XQBwrsElVog" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <form>
        <input type="radio" name="rating" id="stars" value="1"> One<br>
        <input type="radio" name="rating" id="stars" value="2"> Two<br>
        <input type="radio" name="rating" id="stars" value="3"> Three<br>
        <input type="radio" name="rating" id="stars" value="4"> Four<br>
        <input type="submit" id="btn" value="Rate" name="rateForm">
    </form>

        
       
   

    <h2>Average Rating: </h2>



    

    
<script>
    
        $(document).ready(function(){
            
           
            
             $("#btn").click(function() {
                  var rating = $("input[name='rating']:checked").val();
                  //       if(rating){
                        //alert(rating);
                //    }
                console.log("test");
                $("#btn").attr("disabled",true);
            });
        });
    
          
        </script>
</body>

</html>
