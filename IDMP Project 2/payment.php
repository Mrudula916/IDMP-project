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

        $s1="select booking_id,advance_amt from checkin where customer_id='$customer_id'";
        $result=mysqli_query($conn,$s1);
        $row = mysqli_fetch_assoc($result);
        $booking_id=$row["booking_id"];
        $advance=$row["advance_amt"];

        $s1="select amount from cashless where customer_id='$customer_id'";
        $result=mysqli_query($conn,$s1);
        $row = mysqli_fetch_assoc($result);
        if($row){
          $cashless_amt=$row["amount"];
      }
      else{
          $cashless_amt=0;
      }
        

        /*$f="select total_bill($customer_id,$booking_id)";
        $result=mysqli_query($conn,$f);*/
        
        $s3="select firstname,lastname from customer where customer_id='$customer_id'";
        $result=mysqli_query($conn,$s3);
        $row = mysqli_fetch_assoc($result);
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];

        $s4="select room_tarriff,food_amount,total_amount from checkout where customer_id='$customer_id'";
        $result=mysqli_query($conn,$s4);
        $row = mysqli_fetch_assoc($result);
        $roomamt=$row["room_tarriff"];
        $food_amt=$row["food_amount"];
        $total_amt=$row["total_amount"];

        //echo $username,$customer_id,$booking_id,$advance,$firstname,$lastname,$roomamt,$food_amt,$total_amt;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  margin-top:3vw;
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="main_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  
  <div class="col-25">
    <div class="container">
      <h4>Bill Details</h4>
      <p><a href="#">Advance</a> <span class="price"><?php echo"$advance"?></span></p>
      <p><a href="#">Cashless Account</a> <span class="price"><?php echo"$cashless_amt"?></span></p>
      <p><a href="#">Room cost</a> <span class="price"><?php echo"$roomamt"?></span></p>
      <p><a href="#">Food cost</a> <span class="price"><?php echo"$food_amt"?></span></p>
      <hr>
      <p>Balance<span class="price" style="color:black"><b><?php echo"$total_amt"?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>
