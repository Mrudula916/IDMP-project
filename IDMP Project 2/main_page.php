<?php
        session_start();
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "altheda";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(isset($_SESSION['alert'])){

          $message=$_SESSION['alert'];
          echo "<script type='text/javascript'>alert('$message');</script>";
         }
         if(isset($_SESSION["alert"]) && $_SESSION["alert"] != ''){
          unset($_SESSION["alert"]);
        }
         
?>
<!DOCTYPE html>
<!-- LANDING PAGE -contains vector,logo, footer -->
<html lang="en">
	
<head>
  <title>Altheda</title>
  
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="keywords" content="footer, address, phone, icons" />
	

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <link rel="stylesheet" href="./css/main_page.css">
  <link rel="stylesheet" href="./css/style_front.css">
 
</head>
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

	.admin{
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
	.main_img{
		position: relative;
		height: 600px;
		width: 750px;
		margin-top: 3vw;
		margin-left:10.5vw;
		margin-right:1vw;
		clip-path: polygon(72% 0, 93% 7%, 99% 27%, 100% 54%, 100% 100%, 29% 100%, 8% 93%, 0 74%, 0% 35%, 0 0);

	}


.plan{
	font-family: 'Tangerine';
  	text-align: center;
	color:#468889;
    font-size: 5vw;
}
.para{
	font-family: 'Roboto';
  	text-align: center;
	color:black;
    font-size: 1.7vw;
}
.form{
	
	position:relative;
	z-index:1;
	/* //background: RGBA(7,40,195,0.8); */

	background-color:#fcffff; 
	/* max-width:260px; */
	margin-top: 5%;
	padding: 10%;
	/* padding:45px; */
	text-align:right;
	margin-left: 3.5vw;
	
}




 .form input{
		font-family:"Roboto",sans-serif;
		columns: #000000;;
		outline: 1;
		background: #eee;
		width:100%;
		border:0;
		color: #000000;
		margin:0 0 15px;
		padding:15px; 
		/* box-sizing:border-box; */
		font-size:14px;
		
 } 
 

.form button
{
		font-family:"Roboto",sans-serif;
		text-transform:uppercase;
		outline:0;
		background:#FFFFFF;;
		width:100%;
		border:0;
		padding:15px;
		color:#FFFFFF;
		font-size:14px;
		cursor:pointer;
		
}

.form button:hover,.form button:active{background: #444444;}


.form .message{
	/* margin:15px 0 0; */
	color: #468889;
	font-size:15px;
	
}

.form .message a
{
	/* //color:#ffcabb; */
	color:#000000;
	font-weight:bold;
	/* //text-decoration:none; */
}


.form .register-form
{
display:none;

}

#collage-one,#collage-two,#collage-three,#collage-four,
#collage-five,#collage-six,#collage-seven,#collage-eight,
#collage-nine,#collage-ten,#collage-eleven,#collage-twelve,
#collage-thirteen,#collage-fourteen,#gold-img,#silver-img,
#bronze-img{
	width:17.5vw;
	height:17vw;
	padding:0.65vw;
	background:#eee;
	border-radius:0px;
	position:absolute;
}
#collage-text{
    width:26.04vw;
	padding:0.65vw;
	background:#FCFFFF;
	border-radius:0px;
  border: 10px solid #eee;
	position:absolute;
	z-index:8;
    top:16.71vw;
    left:69vw;
}
.titlec {
  font-family: 'Tangerine';
  text-align: center;
  font-size: 3vw;
}
#collage-one{
z-index:1;
top:3.225vw;
left:3.225vw;
}

#collage-two{
z-index:3;
top:13.4vw;
left:16vw;
}

#collage-three{
z-index:4;
top:1.95vw;
left:28.48vw;
}

#collage-four{
z-index:5;
top:13.11vw;
left:40.6vw;
}

#collage-five{
z-index:6;
top:1.95vw;
left:53.66vw;
}

#collage-six{
z-index:2;
top:24.53vw;
left:2.6vw;
}

#collage-seven{
z-index:4;
top:26.18vw;
left:29.83vw;
}

#collage-eight{
z-index:6;
top:25.53vw;
left:54.71vw;
}

#collage-nine{
z-index:3;
top:36.94vw;
left:15.07vw;
}
#collage-ten{
z-index:5;
top:39.29vw;
left:39.6vw;
}
.description{
	font-family: 'Raleway';
	font-size: 1.5vw;
	color:palevioletred;
	width:18.5vw;
	position:absolute;
top:77.48vw;
left:49.1vw;
  border-radius: 6px;
  overflow: hidden;
  
}
.box{
      background-color: white; 
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 30vw;
      width: 40vw;
      margin-left: 30vw;
      margin-top: 4vw;

    }
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-login {
	width: 320px;
}
.modal-login .modal-content {
	border-radius: 1px;
	border: none;
}
.modal-login .modal-header {
	position: relative;
	justify-content: center;
	background: #f2f2f2;
}
.modal-login .modal-body {
	padding: 30px;
}
.modal-login .modal-footer {
	background: #f2f2f2;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
}
.modal-login label {
	font-weight: normal;
	font-size: 13px;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 38px;
	border-radius: 2px; 
}
.modal-login .hint-text {
	text-align: center;
}
.modal-login .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.modal-login .checkbox-inline {
	margin-top: 12px;
}
.modal-login input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.modal-login .btn {
	min-width: 100px;
	background: #3498db;
	border: none;
	line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #248bd0;
}
.modal-login .hint-text a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin-top:-10vw;
	color: #fcffff;
}
td{
	font-size:2vw;
	font-family:'Comic Sans MS';

}
table{
	border-collapse: separate;
    border-spacing: 15px 17px;
	margin-top:2vw;
	margin-left:11vw;
}
.t1{
	margin-left:13vw;

}
</style>
<body>
<div class="title-area">
	<h2 class="title"><img src="Logo.png" width="10%" heigth="30%" style="margin-top: -3vw;margin-right: -3vw;">Altheda Resort</h2>
	<h2 class="tagline"><br></h2>
	<div class="admin">
	<div class="text-center">
		<!-- Button HTML (to Trigger Modal) -->
		<a href="#myModal" class="trigger-btn" data-toggle="modal">Admin</a>
	</div>
	</div>
	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<form action="Admin-analysis.php" method="post">
					<div class="modal-header">				
						<h4 class="modal-title">Login</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">				
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" required="required">
						</div>
						<div class="form-group">
							<div class="clearfix">
								<label>Password</label>
								<a href="#" class="float-right text-muted"><small>Forgot?</small></a>
							</div>
							
							<input type="password" class="form-control" required="required">
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<label class="form-check-label"><input type="checkbox"> Remember me</label>
						<a href="Admin-analysis.php"><input type="submit" class="btn btn-primary" value="Login"></a>
					</div>
				</form>
			</div>
		</div>
	</div>     
	<hr>
</div>


</div>
<div class="container-fluid ">
	<div class="row" >
		<div class="col-sm-14">
			<table >
			<tr>		
			<td>
			<div class="about para">
				<p class="plan">Login/Register....<br></p>
				<div class="col-sm-20" style="margin-left: -2vw;margin-top:-4vw;">
					<div class="container-fluid ">
						<div class="row" >
							<div class="col-lg-18">
								
								<div class="form">
						
									<form class="register-form"  method="post">
										<b>
										<input type="text" name="t1" placeholder="user name" title="username should consists of characters with max length 25" maxlength="25" pattern="[A-Za-z]*" required>
										<input type="password" name="t2" id="passwordwithtitle" maxlength="25" placeholder="password" pattern="^(?=.*\d)(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character,and 1 number." required>
										<input type="email" id="email" name="t3" placeholder="email id"  maxlength="25" title="Enter a valid email ID" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" required>
										<input style="background-color:#468889;color:white;" type="submit" value="create" formaction="create_customer.php">
										
											<P class="message">Already Registered?<a href="#">Login</a></p>
										</b>
									</form>
									<form class="login-form"  method="post">
										<b>
										<input type="text" name="t4" placeholder="email" title="Enter a valid email ID" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" required>
										
										<input type="password" name="t5"  placeholder="password" required>
										<input style="background-color:#468889;color:white;" type="submit" name="login" value="Login" formaction="customer_login.php">
										
										<p class="message">Not registered? <a href="#">Register</a></p>
										</b>
									</form>
								</div>
							</div>
			</div>
			</td>
			<td>
				<img class="main_img " src="https://cdn.loewshotels.com/loewshotels.com-2466770763/cms/cache/v2/5e6f834ef03ec.jpg/1920x1080/fit;c:0,359,5500,3452/80/f3a43fb06e5c788782dc7a01685b7f0a.jpg" alt="Chania" > 
			</td>
			</tr>
			</table>
				</div>
			</div>
		</div>
</div>
	<div class="box">
	<h1 style="text-align:center;font-family: 'Tangerine';font-size:4vw;font-weight:500;color:#468889;">Must Try</h1>
	<h1 style="text-align:center;font-family: 'Tangerine';font-size:4vw;">Popular Food among our Customers </h1>
	<table>
	

	<?php
	$result1=mysqli_query($conn,'CALL food_recommender');
	
	
	while($r1=mysqli_fetch_array($result1))
{
   
   echo"<tr>";
   echo"<td>Dish: ".$r1[0]."</td><tr>
         <tr><td>Category: ".$r1[1]."</td>";
   echo "</tr>";
}
?>
</table>
</div>
<br>
<br>
</div>
	<div class="box">
	<h1 style="text-align:center;font-family: 'Tangerine';font-size:4vw;font-weight:500;color:#468889;">Must Try</h1>
	<h1 style="text-align:center;font-family: 'Tangerine';font-size:4vw;">Popular Activity among our Customers </h1>
	<table class="t1">
	

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "altheda";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$res=mysqli_query($conn,'CALL activity_recommender');
	
	
    $r=mysqli_fetch_assoc($res);
   echo"<tr>";
   echo"<center>";
   echo"<td>".$r["recommendation"]."</td>";
   echo "</center>";
   echo "</tr>";

?>
</table>
</div>
<br>
<br>
		
					
	<div class="row" id="about" >
		<div class="col-lg-12 col-sm-3" id="collage-container">
		  <img src=https://www.bluemountain.ca/-/media/widen/blue-mountain-resort/summer/people/2020-09-20-bm-summerpeople-0039-jpg.ashx?h=421&w=750&hash=12073D6D0FB9FAB7C2067CC03854B1A5 id=collage-one />
		  <img src=https://parade.com/wp-content/uploads/2015/07/1-beachestc.jpg id=collage-two />
		  <img src=https://southerntravelagency.com/wp-content/uploads/2017/03/all-inclusive-family-vacations-southern-travel-agency-1.jpg id=collage-three />
		  <img src=https://www.tampabay.com/resizer/JC5KPvEyIzf_G-J7q8psnbF0jTs=/2280x1282/smart/arc-anglerfish-arc2-prod-tbt.s3.amazonaws.com/public/IIMUXBWL6MI6TFE6IBWI6S7HAY.jpg id=collage-four />
		  <img src=https://escapemke.com/wp-content/uploads/sites/18/2019/08/100.jpg id=collage-five />
		  <img src=https://images.squarespace-cdn.com/content/v1/50c29114e4b0d17a3ed179b3/1466190869058-39D76A83EL1IS87FI2XV/teamwork-team-building-events-activities-tucson-arizona.jpg id=collage-six />
		  <img src=https://i2-prod.mirror.co.uk/incoming/article12420514.ece/ALTERNATES/s615/2_Children-at-birthday-party.jpg id=collage-seven />
		  <img src=https://thewinesisters.com/wp-content/uploads/2013/10/people-toasting-wine-glasses-3171837-min-1110x630.jpg id=collage-eight />
		  <img src=https://blog.wedsites.com/wp-content/uploads/Image-5-5-1.jpg id=collage-nine />
		  <img src=https://theweddingguys.com/wp-content/uploads/2020/10/034_Kim___Andy-1.jpg id=collage-ten />
		
		  
		  <div id=collage-text>
			<span class="titlec"><b>#BestMemories</b></span>
			<p class="content" style="text-align: justify;text-justify: inter-word;">
			<font size="3px">Putting together the smiles and laughters. Celebrating every moment of life.....</font></p>
		  </div>
		</div>
	  </div>
</div>

<script>
		$('.message a').click(function(){
			$('form').animate({height:"toggle",opacity:"toggle"},"fast");
		});		
</script>	
	<footer class="footer-distributed" id="footer">

		<div class="footer-left">
	 
			<h3>Altheda Resort</h3>

			<p class="footer-links">
				
				<a href="#">About</a>
				|
				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">C 2021 Altheda Resort Pvt. Ltd.</p>
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				  <p><span>Boston</span>
					Massachusetts,USA</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+1 8907898553</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@eduonix.com">althedaresort795@gmail.com</a></p>
			</div>
		</div>
		<div class="footer-right">
			<p class="footer-company-about" style="text-align: justify;text-justify: inter-word;">
				
			<div class="footer-icons">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
	</footer>

</body>
</html>
