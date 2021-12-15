<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "altheda";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if(isset($_POST["Confirm"])){
                //echo $_SESSION['USERNAME'];
          $username=$_SESSION['USERNAME'];
          $activity =$_POST["activity"];
          $date=$_POST["date"];
          $time=$_POST["time"];
          $no_people=$_POST["no_people"];
          
          //echo $activity,$date,$time,$no_people;
             $s="select customer_id from customer where username='$username'";
             $result=mysqli_query($conn,$s);
            $row = mysqli_fetch_assoc($result);
             $customer_id=$row["customer_id"];

             $s="select activity_id from activity where activity_name='$activity'";
             $result=mysqli_query($conn,$s);
            $row = mysqli_fetch_assoc($result);
             $activity_id=$row["activity_id"];

            //echo $customer_id,$activity_id;
              $activity_query = "INSERT INTO `activity_registration` (`customer_id`,`activity_id`, `no_people`, `date`, `time_slot`)
              VALUES ('".$customer_id."','".$activity_id."','".$no_people."','".$date."','".$time."')";
            
        if(mysqli_query($conn,$activity_query)){
                //echo "done";
        $_SESSION['alert'] = "Activity registered";
                    

        }
        header("location:activity_main.php");
        
}
        
        
        
        
        
        
        
        ?>