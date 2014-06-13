 <?php

//$fabric_id = $_POST['fabric_id'];


 include 'search.php';
 
 
$qty_yards_update = $_POST['qty'];
$date_received = $_POST['date_received'];

$update_qty = $qty_yards + $qty_yards_update;





$query2 = 'UPDATE  fabric_table SET QTY_YARDS='.$update_qty.' WHERE FABRIC_ID="'.$fabric_id.'"';
//echo $query2;
//				("'.$fabric_id.' " ,  "'.$fabric_name.' ", '.$qty_yards.', '.$price_per_qty.')';
			
				mysql_query($query2, $db) or die ("Error: ".mysql_error($db));
				echo "<br>";
				echo $fabric_id. $fabric_name . $qty_yards . $price_per_qty. "Successful Operation.";
				//echo '<a href="order-area.php">Back <-</a>';

?>

