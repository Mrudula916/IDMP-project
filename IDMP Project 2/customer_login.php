<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altheda";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['login']))
{$email=$_POST['t4'];
$pass=$_POST['t5'];


$s="select email,password from customer_login where email='$email' and password='$pass'";

	$result=mysqli_query($conn,$s);

	$num=mysqli_num_rows($result);
	// echo $num;
	if($num==1)
	{
		$sql1="select username from customer_login where email='$email' and password='$pass'";
		$result = mysqli_query($conn,$sql1);
		//$row = mysql_fetch_row($result);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['USERNAME']=$row["username"];
	//echo "successful";
	 header("location:accomodation.html");
	}
	else
	{
		
		
	// echo '
	// <script>
	// var modalObject=document.getElementById("logoutModal");
	// modalObject.style.display="block";
	// ';
	// $_SESSION['error']="invalid";
	// $script = "<script> $(document).ready(function(){ $('#login-modal').modal('show'); }); </script>";
	$_SESSION['alert'] = "invalid username or password";
	header("location:main_page.php");
	// exit();

	}
}



?>
