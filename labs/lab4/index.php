<?php

 //print_r($_GET);
 
    $randomBackground = "img/sea.jpg";
 
    if ( isset($_GET['keyword']) )  //checks whether form has been submitted
    {
        
        include 'api/pixabayAPI.php';
        
    $keyword = $_GET['keyword'];
    
    $layout = "horizontal";
    if (isset($_GET['layout'])) {
        $layout = $_GET['layout'];
    }
    
    if(!empty($_GET['category'])) {
        $keyword = $_GET['category'];
    }
    
     $imageURLs = getImageURLs($keyword, $layout);
     
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
        <title>Lab 4: Image Slider</title>
        <style>
        
        body {
            background-image: url(<?=$randomBackground?>);
            background-size: cover;
        }
        
        #carouselExampleIndicators {
            width: 500px;
            margin: 0 auto;
        }
        
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="/cst352/labs/lab4/css/styles.css" type="text/css" />
    </head>
    <body>
        
        <br>
        
     <form method="GET"> 
         <input type="text" name="keyword" size="15" placeholder="Keyword" value="<?=$_GET["keyword"]?>"/>
        
         <input type="radio" name="layout" value="horizontal" id="hlayout"/>
         <label for="hlayout">Horizontal</label>
         
         <input type="radio" name="layout" value="vertical" id="vlayout"/>
         <label for="vlayout">Vertical</label>
         
         <select name="category">
             <option> Select One</option>
             <option> Mountains</option>
             <option> Sea</option>
             <option> Sky</option>
             <option value="snow"> Winter</option> 
         </select>
         
         
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