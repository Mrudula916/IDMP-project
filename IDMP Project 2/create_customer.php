<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altheda";

$user=$_POST['t1'];
$pass=$_POST['t2'];
$email=$_POST['t3'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
//echo "  CONNECTION ESTABLISHED \r\n";


        $sql="insert into customer_login (username,email,password) values('$user','$email','$pass')";
        
        if(mysqli_query($conn,$sql))
        { 
            echo "created";
            $sql1="select username from customer_login where email='$email' and password='$pass'";
		    $result = mysqli_query($conn,$sql1);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['USERNAME']=$row["username"];
            header("location:accomodation.html");
            
        }
        else{
            echo "not created";
            $_SESSION['alert'] = 'Error in registering user.';
            header("location:main_page.php");
        }
        

}else 

echo "not connected";

?>