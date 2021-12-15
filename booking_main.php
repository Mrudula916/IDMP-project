<?php
        session_start();
        if(isset($_SESSION['alert'])){

          $message=$_SESSION['alert'];
          echo "<script type='text/javascript'>alert('$message');</script>";
         }
         if(isset($_SESSION["alert"]) && $_SESSION["alert"] != ''){
          unset($_SESSION["alert"]);
        }
         
?>
<!DOCTYPE html>
<html>
<head>
  <title>Altheda booking</title>
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="keywords" content="footer, address, phone, icons" />
	

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Modal Login Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./css/footer.css">

  <link rel="stylesheet" href="./css/style_front.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style>
   body {
	display: grid;
	background-color:#fcffff;
	}

	.title{
	font-family: 'Tangerine';
  	text-align: center;
	color:#468889;
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
	margin-bottom:0vw;
	}

	hr{
	height: 0px;
    border: none;
    border-top: 1px dotted black;
	}
    .box{
      background-color: white; 
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 46vw;
      width: 60vw;
      margin-left: -10vw;
      margin-top: 3vw;

    }
    h1{
        text-align:center;
        font-family: 'Tangerine';
        font-size:5vw;
        font-weight: 400;
        color: black;
        margin-top: 2vw;
    }
    .form-control{
        height: 2.8vw;
    }
    label {
    position: relative;
    top: 0vw;
    left: 0px;
    opacity: 1;
    color: black;
    font-size: 18px;
    font-weight: 400;
    text-align: left;
    
}
.box input{
    font-size: 17px;
    font-weight:300;
    color:black;
}
.box select{
    font-size: 18px;
    font-weight:300;
    color:black;
}
.submit-btn{
    border-radius: 10px;
		background-color: #468889;
		color: #FFFFFF;
		text-align:center;
		padding-top: 0.3vw;
		width:8vw;
		position: relative;
		font-family: 'Arial Narrow', Arial, sans-serif;
		border: none;
		margin-left: 90vw;
		margin-top:0vw;
		height: 2vw;
		font-weight: bold;
}
button{
    background-color: #468889;
}
    @media (max-width: 767px) {
        #pred {
          margin-top: 10%;
          margin-left: 0;
        }
    }
  </style>
</head>
<body>
    <div class="title-area">
        <h2 class="title"><img src="Logo.png" width="10%" heigth="30%" style="margin-top: -3vw;margin-right: -3vw;">Altheda Resort</h2>
        <h2 class="tagline"><br></h2>
        <hr>
  </div>
  <div class="col-lg-8" style="margin-left:30vw">
					
    <div class="col-sm-2 " style="margin-top: -1vw;">
        <a href="accomodation.html" class="about"><font size="6.5" color="black" face="Tangerine"><b>Accomodation</b></font></a>
  
    </div>
    <div class="col-sm-2 " style="margin-top: -1vw; margin-left:3.5vw">
        <a href="events_activities.html" class="links"><font size="6.5" color="black" face="Tangerine"><b>Events/Activities</b></font></a>
    </div>
    <div class="col-sm-2 " style="margin-top: -1vw; margin-left:3.5vw">
        <a href="food.php" class="links"><font size="6.5" color="black" face="Tangerine"><b>Dining</b></font></a>
    
  </div>
  <div class="box"  >
    <div class="col-sm-12 col-lg-12 pt-4 pl-5 pb-3" >
                <form action = "book.php" id="upload-details" method="post">
                    <div class="form-header">
                        <h1>Book Your Stay...</h1>
                    </div>
                    <div class="row" >
                        <div class="col-sm-3 col-lg-6">
                          <label for="name">First Name</label>
                          <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="col-sm-3 col-lg-6">
                            <label for="name">Last Name</label>
                            <input type="text" class="form-control" name="lname">
                          </div>
                          </div>
                          <br>
                          <div class="row">
                        <div class="col-sm-4 col-lg-4">
                          <label for="pwd">Gender</label><br>
                          <label class="radio-inline"><input type="radio" value="male" name="gender">&nbsp;Male</label>&nbsp;&nbsp;
                          <label class="radio-inline"><input type="radio" value="female" name="gender">&nbsp;Female</label>&nbsp;&nbsp;
                          <label class="radio-inline"><input type="radio" value="other" name="gender">&nbsp;Other</label>
                        </div>
                        <div class="col-sm-3 col-lg-4">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob">
                          </div>
                          <div class="col-sm-3 col-lg-4">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" name="nationality">
                          </div>
                          </div>
                          <div class="row">
                        <div class="col-sm-4 col-lg-4">
                          <div class="dropdown">
                            
                            <label for="rt">Room Type</label>
                            <br>
                            <select name="roomtype">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><option value = "royal">Royal Suite</option></a>
                              <a class="dropdown-item" href="#"><option value = "delux">Delux Suite</option></a>
                              <a class="dropdown-item" href="#"><option value = "standard">Standard Suite</option></a>
                             </div>
                            </select>
                            </div>
                            </div>
                             <div class="col-sm-3 col-lg-4">
                                <label for="checkin">Check in</label>
                                <input type="date" class="form-control" name="checkin">
                              </div>
                              <div class="col-sm-3 col-lg-4">
                                <label for="checkout">Check out</label>
                                <input type="date" class="form-control" name="checkout">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 col-lg-4">
                                    <label for="roomno">No of Rooms</label>
                                    <input type="number" class="form-control" name="room_no">
                                  </div>
            
                                    <div class="col-sm-3 col-lg-4">
                                        <label for="adultno">No of Adults</label>
                                        <input type="number" class="form-control" name="adult_no">
                                      </div>
                                      <div class="col-sm-3 col-lg-4">
                                        <label for="childrenno">No of Children</label>
                                        <input type="number" class="form-control" name="children_no">
                                      </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3 col-lg-6">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email">
                              </div>
                                <div class="col-sm-3 col-lg-6">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone">
                                  </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-12">
                                <label for="phone">Address</label>
                                <input type="text" class="form-control" name="address">
                              </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                <center><button type="submit" style="height:3vw; width:13vw; border-radius: 20px;color: white;font-size: 1.5vw; background-color:#468889 ;"class="btn btn-success"name="Book">Book Now</button></center>
                              </div>
                    </form>
                    </div>
            </div>
</body>
</html>
