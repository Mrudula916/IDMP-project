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
        
        if(isset($_POST["Book"])){
                echo $_SESSION['USERNAME'];
          $username=$_SESSION['USERNAME'];
          $fname = $_POST["fname"];
          $lname=$_POST["lname"];
          $gender=$_POST["gender"];
          $dob=$_POST["dob"];
          $nationality = $_POST["nationality"];
          $roomtype = $_POST["roomtype"];
          $checkin=$_POST["checkin"];
          $checkout=$_POST["checkout"];
          $roomno=$_POST["room_no"];
          $adultno=$_POST["adult_no"];
          $childrenno=$_POST["children_no"];
          $email=$_POST["email"];
          $phone=$_POST["phone"];
          $address=$_POST["address"];
             //echo $username,$fname,$lname,$gender,$dob,$nationality,$email,$phone,$address;
              $customer_query = "INSERT INTO `customer` (`username`,`firstname`, `lastname`, `gender`, `email`, `date_of_birth`, `nationality`, `address`, `phone`)
              VALUES ('".$username."','".$fname."','".$lname."','".$gender."','".$email."','".$dob."','".$nationality."','".$address."','".$phone."')";
              //echo $customer_query;
              //echo $username,$roomtype,$roomno,$checkin,$checkout,$adultno,$childrenno;
              $booking_query = "INSERT INTO `booking` (`username`, `room_type`, `no_of_rooms`, `check_in`, `check_out`,`adult_no`,`children_no`) 
              VALUES ('".$username."','".$roomtype."','".$roomno."','".$checkin."','".$checkout."','".$adultno."','".$childrenno."')";
              //echo $booking_query;
        if(mysqli_query($conn,$customer_query)){
                if(mysqli_query($conn,$booking_query)) {
                    $_SESSION['alert'] = "Booking Successful";
                    

                }
        }
       header("location:booking_main.php");
        
}
        
        
        
        
        
        
        
        ?>