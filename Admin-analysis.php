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
?>

<!DOCTYPE html>
<!-- LANDING PAGE -contains vector,logo, footer -->
<html lang="en">
	
<head>
  <title>Altheda</title>
  
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="keywords" content="footer, address, phone, icons" />
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
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
      height: 20vw;
      width: 30vw;
      margin-left: 20vw;
      margin-top: 5vw;

    }
	.box1{
      background-color: white; 
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 24vw;
      width: 30vw;
      margin-left: 57vw;
      margin-top: -20vw;

    }
    .box2{
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
      height: 30vw;
      width: 40vw;
      margin-left: 10vw;
      margin-top: 8vw;

    }
.box3{
  background-color: white;
  border-radius: 6px;
  box-shadow: 0 19px 48px rgba(0, 0, 0, 0.3), 0 15px 32px rgba(0, 0, 0, 0.22);
  height: 30vw;
  width: 40vw;
  margin-left: 55vw;
    margin-top: -30vw;

}
	th{
		font-size:1.8vw;
		color:#468889;
		text-align:center;
	}
	td{
		text-align:center;
		font-size: 1.5vw;
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
	<h2 class="tagline"><br></h2>
    <hr>
    </div>
    <div class="col-sm-8" style="margin-left:80vw">
       
					
        <div class="col-sm-2 " style="margin-top: -1vw;">
            <a href="employee_details.php" class="emp"><button class="ed">Employee Details</button></a>
      
        </div>
        <div class="col-sm-2 " style="margin-top: -1vw;margin-left:-1.8vw;">
            <a href="main_page.php" class="lg"><button class="lg">Logout</button></a>
      
        </div>
    </div>
    <h2 class="tagline">Report</h2>
	<div class="box">
	<h2 style="text-align:center;">Available Rooms</h2>
	<center><table>
	<th>Room type</th>
	<th>Price</th>
	<th>Available</th>

	<?php
	$query="SELECT * FROM `room_availability_view`";
	$result=mysqli_query($conn,$query);
	
	
	while($r=mysqli_fetch_array($result))
{
   echo"<tr>";
   echo"<td>".$r[0]."</td>
         <td>".$r[1]."</td>
         <td>".$r[2]."</td>";
   echo "</tr>";
}
?>
</table></center>
</div>

<div class="box1">
	<h2 style="text-align:center;">Employee Count</h2>
	<center><table>
	<th>Department</th>
	<th>Count</th>

	<?php
	$query1="SELECT * FROM `emp_by_dept`";
	$result1=mysqli_query($conn,$query1);
	
	
	while($r1=mysqli_fetch_array($result1))
{
   echo"<tr>";
   echo"<td>".$r1[2]."</td>
         <td>".$r1[3]."</td>";
   echo "</tr>";
}
?>
</table></center>
</div>
<?php
$myquery = "
  SELECT nationality, count(nationality) as count
  FROM  `demographics`
  Group By nationality";
if ( ! $query ) {
  echo mysql_error();
  die;
}
$chart_data="";
$query = mysqli_query($conn, $myquery);
$data = array();

while ($row = mysqli_fetch_array($query)) {

           $nationality[]  = $row['nationality']  ;
           $count[] = $row['count'];
       }

$query="CALL profit_loss_calc";
$res = mysqli_query($conn, $query);
$myquery1 = "select * from profit_loss";


$query1 = mysqli_query($conn, $myquery1);
if(!$query1) {
    echo mysql_error();
    die;
}
$data1 = array();

while ($row1 = mysqli_fetch_array($query1)) {

           $month[]  = $row1['_date_']  ;
           $profit_loss[] = $row1['profit_loss'];
       }


?>
<div class="box2">
<div style="width:100%;hieght:20%;text-align:center">
            <h2 class="page-header" >Demoghraphics Report </h2>
            <div> Demographics </div>
            <canvas  id="chartjs_bar"></canvas>
        </div>
</div>

<div class="box3">
<div style="width:100%;hieght:20%;text-align:center">
            <h2 class="page-header" >Profit/Loss </h2>
            <div> Profit/Loss </div>
            <canvas  id="chartjs_bar1"></canvas>
        </div>
</div>

</body>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($nationality); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($count); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
                        
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });

var ctx1 = document.getElementById("chartjs_bar1").getContext('2d');
          var myChart = new Chart(ctx1, {
              type: 'bar',
              data: {
                  labels:<?php echo json_encode($month); ?>,
                  datasets: [{
                      backgroundColor: [
                         "#5969ff",
                          "#ff407b",
                          "#25d5f2",
                          "#ffc750",
                          "#2ec551",
                          "#7040fa",
                          "#ff004e",
                                  "#5969ff",
                                   "#ff407b",
                                   "#25d5f2",
                                   "#ffc750",
                                   "#2ec551",
                                   "#7040fa",
                                   "#ff004e"
                      ],
                      data:<?php echo json_encode($profit_loss); ?>,
                  }]
              },
              options: {
                     legend: {
                  display: false,
                  position: 'bottom',
                  

                  labels: {
                      fontColor: '#71748d',
                      fontFamily: 'Circular Std Book',
                      fontSize: 14,
                  }
              },


          }
          });
    </script>

</html>

