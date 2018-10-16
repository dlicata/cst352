<!--homework 3-->




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        
        <title>Information Form </title>
    </head>
    <body>
        <h2>Personal Information Form</h2>
        
        <form id="name" method="get">
            
            First name:<br>
              <input type="text" name="firstname" placeholder="John">
              <br>
              Last name:<br>
              <input type="text" name="lastname" placeholder="Smith">
              <br><br>
            
              <textarea name="message" rows="10" cols="60">Please write a short blurb about yourself.</textarea>
              <br>
              
              
            <br>        
        
        <fieldset id="colors">
            <legend>Select your favorite color:</legend>
            <input id="blue" type="checkbox" name="color" value="blue">
            <label for="blue">Blue</label><br>
            <input id="yellow" type="checkbox" name="color" value="yellow">
            <label for="yellow">Yellow</label><br>
            <input id="green" type="checkbox" name="color" value="green">
            <label for="green">Green</label><br>
            <input id="red" type="checkbox" name="color" value="red">
            <label for="red">Red</label>
        </fieldset>
        <br>
        
        <fieldset id="animals">
            <legend>Choose your favorite animal or one that is the closest to your favorite:</legend>
            <input id="Dog" type="radio" name="animal" value="Dog">
            <label for="Dog">Dog</label><br>
            <input id="cat" type="radio" name="animal" value="cat">
            <label for="cat">Cat</label><br>
            <input id="ground" type="radio" name="animal" value="ground">
            <label for="ground">Ground Squirrel</label>
        </fieldset>
         <br>
         <br>
        
        <label for="astrosign">Choose your astrological sign:</label>
            <select id="astrosign" name="select">
            <option value="Capricorn">Capricorn</option>
            <option value="Aquarius">Aquarius</option>
            <option value="Pisces">Pisces</option>
            <option value="Aries">Aries</option>
            <option value="Taurus">Taurus</option>
            <option value="Gemini">Gemini</option>
            <option value="Cancer">Cancer</option>
            <option value="Leo">Leo</option>
            <option value="Virgo">Virgo</option>
            <option value="Libra">Libra</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Sagittarius">Sagittarius</option>
            </select>
            
            
            <br>
            <br>
             <input type="submit" value="Submit">
            </form>
             </br> 
             
             <br>
            
            <strong> Your name is:</strong> <?php echo $_GET["firstname"]; ?><br>
            <strong> Your favorite color is:</strong> <?php echo $_GET["color"]; ?><br>
            <strong> Your favorite animal is:</strong> <?php echo $_GET["animal"]; ?><br>
            <strong> Your sign is:</strong> <?php echo $_GET["select"]; ?><br>
            
            <strong>Here is the blurb you wrote about yourself in case you forgot: </strong> <?php echo $_GET["message"]; ?><br>
            
            <footer>
                <hr>
  <p>Homework 3 Danielle Licata</p>
    </footer>
    </body>
    
</html>