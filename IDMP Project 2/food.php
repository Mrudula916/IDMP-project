<?php
session_start();
$message = "";
if(isset($_SESSION['alert'])){
echo $message;
  $message=$_SESSION['alert'];
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
 if(isset($_SESSION["alert"]) && $_SESSION["alert"] != ''){
  unset($_SESSION["alert"]);
}
?>

<html lang="en">
    
<head>
  <title>Altheda</title>
  
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="keywords" content="footer, address, phone, icons" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <link rel="stylesheet" href="{{url_for('static',filename='/css/footer.css')}}">

  <link rel="stylesheet" href="{{url_for('static',filename='/css/style_font.css')}}">
      <meta charset="UTF-8">
          <!--<title> Increment & Decrement Button | CodingLab </title>-->
          <link rel="stylesheet" href="style.css">
 
</head>

<style>


    body {
    display: grid;
    background-color:#fcffff;
    }

    .title{
    font-family: 'Tangerine';
      text-align: center;
    color:#468889;;
    font-size: 8vw;
    /*background-color:orange;*/
    margin-bottom: -3.5vw;
    }

    .tagline{
    font-family: 'Tangerine';
      text-align: center;
    color:black;
    font-size: 4vw;
    /*background-color: palegreen;*/
    margin-bottom:-1vw;
    }

    hr{
    height: 0px;
    border: none;
    border-top: 1px dotted black;
    }
   .image{
    width:22.5vw;
    height:21vw;
    position:relative;
    top:3.48vw;
    left:3.6vw;
    border-radius: 6px;
    overflow: hidden;
    background-color: #FFF;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);

}
.cardb{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-left: -11vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.event{
    border-radius: 10px;
        background-color: #468889;
        color: #FFFFFF;
        width:15vw;
        position: relative;
        font-family: 'Arial Narrow', Arial, sans-serif;
        font-size:1.5vw;
        border: none;
        margin-left:7.7vw;
        margin-top:1vw;
        height: 3vw;
        font-weight: bold;
}

.cardw{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-left: 22vw;
    margin-top: -36vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.carda{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-top:-36vw;
    margin-left: 55vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.cardr{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-left: -11vw;
    margin-top:3vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.cardoff{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-left: 22vw;
    margin-top: -36vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.cardother{
    background-color:white;
    border-radius: 6px;
    width:30vw;
    height: 36vw;
    margin-left: 55vw;
    margin-top: -36vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
.act_card{
    background-color:white;
    border-radius: 6px;
    width: 75vw;
    height: 65vw;
    margin-left: 12vw;
    margin-top: 3vw;
    box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
}
    * {
      box-sizing: border-box;
    }
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      position: relative;
      margin-left:0vw;
      margin-top:3vw;
    }

    /* Caption text */
    .text {
      color:white;
      font-weight:bold;
      font-size: 2vw;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: left;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }
    .activities_list{
        font-family:'Merienda';
        font-size: 1.3vw;
    }
   .w3-container{
      background-color:#468889 ;
      padding-top: 64px;
   }

    @-webkit-keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
 
 h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
 input[type="number"]{
  width: 5vw;
  position: relative;
  margin-left: 91vw;
 }
 input[type="submit"]{
  width: 12vw;
  height:3vw;
  font-size:2vw;
  font-weight: 400;
  position: relative;
  margin-left: 45vw;
  margin-top:0.4vw;
  padding-bottom:1vw;
 }

</style>
<body>
  
    <div class="title-area">
        <h2 class="title"><img src="Logo.png" width="10%" heigth="30%" style="margin-top: -3vw;margin-right: -3vw;">Altheda Resort</h2>
        <h2 class="tagline"><br></h2>
        <a href="logout.php"><button type="submit" style="height:2.5vw; width:11vw; border-radius: 20px;color: white;font-size: 1.2vw; background-color:#468889 ;margin-left:85vw" name="logout">Logout</button></a>

        <hr>
    </div>
    <div class="col-sm-12" style="margin-left:35vw">
    
      <div class="col-sm-2 " style="margin-top: -1vw;">
          <a href="accomodation.html" class="links"><font size="6.5" color="black" face="Tangerine"><b>Accomodation</b></font></a>
      </div>
      <div class="col-sm-2 " style="margin-top: -1vw;">
          <a href="events_activities.html" class="links"><font size="6.5" color="black" face="Tangerine"><b>Events/Activities</b></font></a>
      
    </div>
    </div>
    <p style="text-align: center; font-family: Brush Script MT; font-size: 6vw;"> Dining </p>
    <div class="slideshow-container">

        <div class="mySlides">
          <div class="numbertext">1 / 5</div>
          <img src="https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2019/04/shutterstock_407933644.jpg" style="width:100vw;height:50vw">
          <div class="text">Lobster Rolls</div>
        </div>
        
        <div class="mySlides">
          <div class="numbertext">2 / 5</div>
          <img src="https://static.independent.co.uk/2021/10/06/09/ottolenghi-shakshuka.jpg" style="width:100vw;height:50vw">
          <div class="text">Sweet Potato Shakshuka</div>
        </div>
        
        <div class="mySlides">
          <div class="numbertext">3 / 5</div>
          <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2020/04/06/FNK_Chocolate-Mousse_H_v2_4x3.jpg.rend.hgtvcom.616.462.suffix/1586200107816.jpeg" style="width:100vw;height:50vw">
          <div class="text">Chocolate Mousse</div>
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 5</div>
            <img src="https://storcpdkenticomedia.blob.core.windows.net/media/recipemanagementsystem/media/recipe-media-files/recipes/retail/x17/17244-caramel-topped-ice-cream-dessert-760x580.jpg?ext=.jpg" style="width:100vw;height:50vw">
            <div class="text">Caramel Cake</div>
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 5</div>
            <img src="https://images-gmi-pmc.edge-generalmills.com/30cf6d4d-d10b-4b81-bd68-53d0b7aa685d.jpg" style="width:100vw;height:50vw">
            <div class="text">Paloma Fizz Mocktail</div>
          </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <br><br><br>
        <div id="menu" class="w3-container ">
        <h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
        <div class="w3-row w3-center w3-border w3-border-dark-grey">
            <a href="#starters"><div class="w3-third w3-padding-large w3-hover-red">Starters</div></a>
        <a href="#main_course"><div class="w3-third w3-padding-large w3-red">Main Course</div></a>
        <a href="#desserts"><div class="w3-third w3-padding-large w3-hover-red">Desserts</div></a>
        <a href="#drinks"><div class="w3-third w3-padding-large w3-hover-red">Mocktails</div></a>
        </div>
    
        
        <form class="order_now" name="order" method="post" action="food_conn.php">
        <div class="w3-container w3-white w3-padding-32">
            
        <h1><b>Today'&#39's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span>
&nbsp
        <input type="checkbox" name='item[]' value='1' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
        <input name ='qty[]' value='qty_1' type="number" id="1" min="0">

        <hr>
       
        <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='2' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
        <input name ='qty[]' value='qty_2' type="number" id="2" min="0">

        <hr>
        <h1 name='item_3'><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='3' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
        <input name ='qty[]' value='qty_3' type="number" id="3" min="0">
        </div>
    
        <h1 id="main_course" class="w3-center w3-jumbo w3-padding-32">MAIN COURSE</h1>
        <div class="w3-container w3-white w3-padding-32">
        <h1 name='item_4'><b>Margherita Pizza</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.50</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='4' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
        <input name ='qty[]' value='qty_4' type="number" id="4" min="0">

        <hr>
        <h1 name='item_5'><b>Chicken Pizza</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$17.00</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='5' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
        <input name ='qty[]' value='qty_5' type="number" id="5" min="0">

        <hr>
        <h1 name='item_6'><b>Sweet Potato Shakshuka</b> <span class="w3-tag w3-red w3-round">Hot!</span>
&nbsp
<input type="checkbox" name='item[]' value='6' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
        <p class="w3-text-grey">Sweet potatoe, onions, lemon juice, eggs, cheddar cheese</p>
        <input name ='qty[]' value='qty_6' type="number" id="6" min="0">

        <hr>
        <h1 name='item_7'><b>Pineapple'o'clock (Pizza)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$16.50</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='7' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
        <input name ='qty[]' value='qty_7' type="number" id="7" min="0">

        <hr>
        <h1 name='item_8'><b>Lobster Rolls</b> <span class="w3-tag w3-red w3-round">Hot!</span>
&nbsp
<input type="checkbox" name='item[]' value='8' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$30.00</span></h1>
        <p class="w3-text-grey">Lobster, bun, mayonnaise, lemon juice, salt, black pepper</p>
        <input name ='qty[]' value='qty_8' type="number" id="8" min="0">

        <hr>
        <h1 name='item_9'><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span>
&nbsp
<input type="checkbox" name='item[]' value='9' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
        <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
        <input name ='qty[]' value='qty_9' type="number" id="9" min="0">

        <hr>
        <h1 name='item_10'><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='10' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Ravioli filled with cheese</p>
        <input name ='qty[]' value='qty_10' type="number" id="10" min="0">

        <hr>
        <h1 name='item_11'><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='11' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
        <input name ='qty[]'  value='qty_11' type="number" id="11" min="0">

        </div>
        
        
        <h1 id="desserts" class="w3-center w3-jumbo w3-padding-32">DESSERTS</h1>
        <div class="w3-container w3-white w3-padding-32">
        
        <h1 name='item_12'><b>Ice Creams</b> <span class="w3-tag w3-grey w3-round">Seasonal flavors available</span>
&nbsp
<input type="checkbox" name='item[]' value='12' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
        <p class="w3-text-grey">Vanilla, Chocolate, Strawberry, Butterscotch, Black Current, Mango</p>
        <input name ='qty[]' value='qty_12' type="number" id="12" min="0">

        <hr>
        <h1 name='item_13'><b>Creme brulee</b>  <span class="w3-tag w3-grey w3-round">Popular</span>
&nbsp
<input type="checkbox" name='item[]' value='13' style="width: 2%; height: 2%;">
            <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
        <p class="w3-text-grey">Custard, caramelized sugar </p>
        <input name ='qty[]' value='qty_13' type="number" id="13"min="0">

        <hr>
        <h1 name='item_14'><b>Chocolate Mousse</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$18.00</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='14' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">chocolate, cream, sugar, eggs, butter.</p>
        <input name ='qty[]' value='qty_14' type="number" id="14" min="0">

        <hr>
        <h1 name='item_15'><b>Caramel Cake</b> <span class="w3-tag w3-red w3-round">Hot!</span>
&nbsp
<input type="checkbox" name='item[]' value='15' style="width: 2%; height: 2%;">
            <span class="w3-right w3-tag w3-dark-grey w3-round">$25.00</span></h1>
        <p class="w3-text-grey">Butter, milk, egg, vanilla extract, sugar, flour</p>
        <input name ='qty[]' value='qty_15' type="number" id="15" min="0">
        </div>
        
        <h1 id="drinks" class="w3-center w3-jumbo w3-padding-32">Mocktails</h1>
        <div class="w3-container w3-white w3-padding-32">
        
        <h1 name='item_16'><b>Paloma Fizz Mocktail</b> <span class="w3-tag w3-red w3-round">Hot!</span>
&nbsp
<input type="checkbox" name='item[]' value='16' style="width: 2%; height: 2%;">
        <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
        <p class="w3-text-grey">Rosemary juice, grapefruit Juice, ice, soda</p>
        <input name ='qty[]' value='qty_16' type="number" id="16" min="0">

        <hr>
        <h1 name='item_17'> <b>Blue Lagoon</b>  <span class="w3-tag w3-grey w3-round">Popular</span>
&nbsp
<input type="checkbox" name='item[]' value='17' style="width: 2%; height: 2%;">
            <span class="w3-right w3-tag w3-dark-grey w3-round">$18.00</span></h1>
        <p class="w3-text-grey">blue Curaçao syrup, lemon juice, lemon-lime soda </p>
        <input name ='qty[]' value='qty_17' type="number" id="17" min="0">

        <hr>
        <h1 name='item_18'><b>Tropical punch mocktail</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.00</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='18' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Passionfruit, mint, lemongrass and orange, sparkling water</p>
        <input name ='qty[]' value='qty_18' type="number" id="18" min="0">

        <hr>
        <h1 name='item_19'><b>Watermelon 'nojitos'</b>
            <span class="w3-right w3-tag w3-dark-grey w3-round">$15.00</span></h1>
&nbsp
<input type="checkbox" name='item[]' value='19' style="width: 2%; height: 2%;">
        <p class="w3-text-grey">Watermelon, mint, soda</p>
        <input name ='qty[]' value='qty_19' type="number" id="19" min="0">
    
</div>
            <input type="submit" value="Order now" name="order">
        </form>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
        

    </script>

</body>

</html>
