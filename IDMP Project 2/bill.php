<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "altheda";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn){
            //echo "connected";
        }
        $username=$_SESSION["USERNAME"];
        $s="select customer_id from customer where username='$username'";

	    $result=mysqli_query($conn,$s);
        $row = mysqli_fetch_assoc($result);
        $customer_id=$row["customer_id"];

        $q="select booking_id,room_type from booking where username='$username'";
         $result=mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($result);
        $booking_id=$row["booking_id"];
        $room_type=$row["room_type"];

        $q1="select room_number from room where room_type='$room_type' and available=1";
         $result=mysqli_query($conn,$q1);
        $row = mysqli_fetch_assoc($result);
        $room_number=$row["room_number"];



        $q2="INSERT INTO `checkin` (`customer_id`,`booking_id`, `room_number`) 
        VALUES ('".$customer_id."','".$booking_id."','".$room_number."')";
        $result=mysqli_query($conn,$q2);
        

        $s1="select booking_id,advance_amt from checkin where customer_id='$customer_id'";
        $result=mysqli_query($conn,$s1);
        $row = mysqli_fetch_assoc($result);
        $booking_id=$row["booking_id"];
        $advance=$row["advance_amt"];

        $s1="select amount from cashless where customer_id='$customer_id'";
        $row = mysqli_fetch_assoc($result);
        if($row){
            $cashless_amt=$row["amount"];
        }
        else{
            $cashless_amt=0;
        }
        
        $f="SELECT total_bill($customer_id, $booking_id)";
        $result1=mysqli_query($conn,$f);
        
        $s3="select firstname,lastname from customer where customer_id='$customer_id'";
        $result2=mysqli_query($conn,$s3);
        $row = mysqli_fetch_assoc($result2);
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];

        $s4="select room_tarriff,food_amount,total_amount from checkout where customer_id='$customer_id'";
        $result3=mysqli_query($conn,$s4);
        $row = mysqli_fetch_assoc($result3);
        $roomamt=$row["room_tarriff"];
        $food_amt=$row["food_amount"];
        $total_amt=$row["total_amount"];

        //echo $username,$customer_id,$booking_id,$advance,$firstname,$lastname,$roomamt,$food_amt,$total_amt;

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
    h1{
        text-align:center;
        font-family: 'Tangerine';
        font-size:5vw;
        font-weight: 400;
        color: black;
        margin-top: 2vw;
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
      height: 38vw;
      width: 40vw;
      margin-left: 28vw;
      margin-top: 3vw;

    }
    table{
        margin-left:5vw;
        font-size: 2vw;
    }
    label{
        color:#468889;
    }
    </style>
    </head>
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
</div>
  <div class="box"  >
    <div class="col-sm-12 col-lg-12 pt-4 pl-5 pb-3" >
                
                        <h1>Final Bill</h1>
                    </div>
                    <?php
                     echo"<table><tr>
                     <td><label>Username:&nbsp&nbsp</label>".$username."</td>
                     </tr>
                     <tr>
                     <td><label>First Name:&nbsp&nbsp </label>".$firstname."</td>
                     </tr>
                     <tr>
                     <td><label>Last Name:&nbsp&nbsp </label>".$lastname."</td>
                     </tr>
                     <tr>
                     <td><label>Advance paid:&nbsp&nbsp </label>".$advance."</td>
                     </tr>
                     <tr>
                     <td><label>Balance from cashless:&nbsp&nbsp </label>".$cashless_amt."</td>
                     </tr>
                     <tr>
                     <td><label>Room price:&nbsp&nbsp </label>".$roomamt."</td>
                     </tr>
                     <tr>
                     <td><label>Food price:&nbsp&nbsp </label>".$food_amt."</td>
                     </tr>
                     <tr>
                     <td><label>Balance Amount:&nbsp&nbsp </label>".$total_amt."</td>
            
                    </tr></table>";

                    ?>
<a href="payment.php"><button type="submit" style="height:2.5vw; width:11vw; border-radius: 20px;color: white;font-size: 1.2vw; background-color:#468889 ;margin-left:12.5vw;" name="paynow">Pay Now</button></a>

</div>

    <body>

</body>
</html>