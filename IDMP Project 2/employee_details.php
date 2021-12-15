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

//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Altheda";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//if($conn){
//      echo "confirm";
//}
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
.ed{
    border-radius: 10px;
    background-color: #468889;
    color: #FFFFFF;
    text-align:center;
    padding-top: 0.3vw;
    width:8vw;
    height: 2vw;
    position: relative;
    font-family: 'Arial Narrow', Arial, sans-serif;
    border: none;
    margin-left: 0vw;
    margin-top:0vw;
    height: 3vw;
    font-weight: bold;

}
.lg{
		border-radius: 10px;
		background-color: #468889;
		color: #FFFFFF;
		text-align:center;
		padding-top: 0.3vw;
		width:8vw;
        height: 2vw;
		position: relative;
		font-family: 'Arial Narrow', Arial, sans-serif;
		border: none;
		margin-left: 0vw;
		margin-top:0vw;
		height: 3vw;
		font-weight: bold;

	}
.box{
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 32vw;
      width: 89vw;
      margin-left: 5vw;
      margin-top: 2vw;

    }
.box1{
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 20vw;
      width: 42vw;
      margin-left: 30vw;
      margin-top: 3vw;

    }

th {
    font-size: 20px;
    text-align:center;
}
td{
  text-align:center;
}
table{
  border-collapse: separate;
  border-spacing: 15px 15px;
	margin-left:0vw;
}

</style>

<body>
<div class="title-area">
<h2 class="title"><img src="Logo.png" width="10%" heigth="30%" style="margin-top: -3vw;margin-right: -3vw;">Altheda Resort</h2>
<h2 class="tagline">Welcome....</h2>
<hr>
</div>
<div class="col-sm-8" style="margin-left:80vw">
					
        <div class="col-sm-2 " style="margin-top: -1vw;">
            <a href="Admin-analysis.php" class="emp"><button class="ed">Repot</button></a>
      
        </div>
        <div class="col-sm-2 " style="margin-top: -1vw;margin-left:-1.8vw;">
            <a href="main_page.php" class="lg"><button class="lg">Logout</button></a>
      
        </div>
    </div>
<br>
<div class="box">
<center>
    
    <h2><strong> Employee Details </strong></h2>
    <table align=left style="width: 100%; cell-spacing: 5vw;">
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Phone No.</th>
    <th>Email</th>
    <th>Department</th>
<hr>
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM employee");
    if (!$sql) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
    }
    while($row=mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>". $row[0]."</td>"."<td>".$row[1]." ".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td>"."<td>".$row[7]."</td>";
        echo "</tr>";
    
    }
    ?>
    </table>
    
   </center>
</div>
<div class="box1">
<center>
    
    <h2><strong> Employee Week Pay </strong></h2>
    <table align=left style="width: 100%; cell-spacing: 5vw;">
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Salary</th>
<hr>
    <?php
    $query="CALL `employee_salary_calculator`()";
    $sql = mysqli_query($conn, $query);
    if (!$sql) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
    }
    while($row=mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>". $row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>";
        echo "</tr>";
    
    }
    ?>
    </table>
    
   </center>
</div>
<hr>
</html>
