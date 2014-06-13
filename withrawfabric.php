 <?php

//$fabric_id = $_POST['fabric_id'];


 include 'search.php';
 
 $receiving_dept = $_POST['receiving_dept'];
$qty_yards_update = $_POST['qty'];
$comment = $_POST['comment'];

$update_qty = $qty_yards - $qty_yards_update;



if ($update_qty < 0){
	echo " Operation Not Permitted. Quantity requested is beyond the quantity in stock.";
	exit();
}

$query2 = 'UPDATE  fabric_table SET QTY_YARDS='.$update_qty.' WHERE FABRIC_ID="'.$fabric_id.'"';
//echo $query2;
//				("'.$fabric_id.' " ,  "'.$fabric_name.' ", '.$qty_yards.', '.$price_per_qty.')';
			
				mysql_query($query2, $db) or die ("Error: ".mysql_error($db));
				echo "<br>";
				echo $fabric_id. $fabric_name . $qty_yards . $price_per_qty. "Successful Operation.";
				//echo '<a href="order-area.php">Back <-</a>';

?>

