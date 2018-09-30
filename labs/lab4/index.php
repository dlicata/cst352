<?php

 //print_r($_GET);
 
    $randomBackground = "/cst352/labs/lab4/Slider/img/sea.jpg";
 
    if ( isset($_GET['keyword']) )  //checks whether form has been submitted
    {
        
        include 'Slider/api/pixabayAPI.php';
        
        
    $keyword = $_GET['keyword'];
    
     $imageURLs = getImageURLs($keyword);
     
     $randomIndex = array_rand($imageURLs);
     
     $randomBackground = $imageURLs[$randomIndex];
     
     //print_r($imageURLs);
    
    echo "you searched for: <strong>" . $keyword . "</strong> ";
    
    shuffle($imageURLs);
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <style>
        @import url("Slider/css/styles.css");
        
        body{
            background-image: url(<?=$randomBackground?>);
            background-size: cover;
        }
        
        #carouselExampleIndicators {
            width: 500px;
            margin: 0 auto;
        }
        
        </style>
        <title>Lab 4: Image Slider</title>
    </head>
    <body>
        
     <form method="GET">
         <input type="text" name="keyword" size="15" placeholder="keyword"/>
         <input type="submit" name="submitBtn" value="Submit"/>
     </form>
     
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=$imageURLs[0]?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$imageURLs[1]?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$imageURLs[2]?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
            
    <h1>You must type a keyword or select a category</h1>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>