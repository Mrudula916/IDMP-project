<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altheda";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
      //echo "confirm";
}

if(isset($_POST["order"])){
    //echo $_SESSION['USERNAME'];
$username=$_SESSION['USERNAME'];

/*$item_list = array($item_1, $item_2, $item_3, $item_4, $item_5, $item_6, $item_7, $item_8, $item_9, $item_10,$item_11, $item_12, $item_13, $item_14, $item_15, $item_16, $item_17, $item_18, $item_19);
    
$qty_list = array($qty_1,$qty_2, $qty_3, $qty_4, $qty_5, $qty_6, $qty_7, $qty_8, $qty_9, $qty_10,$qty_11, $qty_12, $qty_13, $qty_14, $qty_15, $qty_16, $qty_17, $qty_18, $qty_19);
   */
$res = "";
    $qty_list = $_POST['qty'];
    $item_list = $_POST['item'];
    for($i=0; $i<sizeof($item_list); $i++){
    //echo $item_list[$i];
    }
    if (empty($qty_list)) {
        $_SESSION['alert'] = "Please select a food item to order";
        
    }
    else{

        foreach($item_list as $val){
            foreach($qty_list as $q_val){
                    $food_query = "INSERT INTO food_order(username, item_id, quantity) VALUES ('$username','$val', '$q_val')";
                //echo $food_query;
                $res = mysqli_query($conn,$food_query);
                }
                
            }
        
    }
        if($res){
                    $_SESSION['alert'] = "Order placed!";
            }
        }
    header("location: food.php");

?>
