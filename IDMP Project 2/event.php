<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "altheda";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if(isset($_POST["Confirm"])){
                echo $_SESSION['USERNAME'];
          $username=$_SESSION['USERNAME'];
          $fname = $_POST["fname"];
          $lname=$_POST["lname"];
          $gender=$_POST["gender"];
          $dob=$_POST["dob"];
          $nationality = $_POST["nationality"];
          $eventtype = "birthday";
          $date=$_POST["date"];
          $venue="birthday";
          $no_people=$_POST["no_people"];
          $email=$_POST["email"];
          $phone=$_POST["phone"];
          $address=$_POST["address"];
          $s_time=$_POST["s_time"];
          $e_time=$_POST["e_time"];
          //echo $fname,$lname,$gender,$dob,$nationality,$eventtype,$date,$venue,$no_people,$email,$phone,$address,$s_time,$e_time;
              $customer_query = "INSERT INTO `customer` (`username`,`firstname`, `lastname`, `gender`, `email`, `date_of_birth`, `nationality`, `address`, `phone`)
              VALUES ('".$username."','".$fname."','".$lname."','".$gender."','".$email."','".$dob."','".$nationality."','".$address."','".$phone."')";
            
              $event_query = "INSERT INTO `events` (`username`,`date`, `s_time`, `e_time`, `event_type`, `venue`) 
              VALUES ('".$username."','".$date."','".$s_time."','".$e_time."','".$eventtype."','".$venue."')";
        if(mysqli_query($conn,$customer_query)){
                //echo "done";
                if(mysqli_query($conn, $event_query)) {
                    //echo "New post created";
                    $_SESSION['alert'] = "Event registered";
                    

                }
        }
        header("location:event_main.php");
        
}
        
        
        
        
        
        
        
        ?>