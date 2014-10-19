 <?php

//$fabric_id = $_POST['fabric_id'];


 include 'search_nonverbose.php';
 

$qty_yards_update = $_POST['qty_remove'];


$update_qty = $qty_yards - $qty_yards_update;



if ($update_qty < 0){
	echo '<p class="alert alert-warning"> Operation Not Permitted. Quantity requested is beyond the quantity in stock."</p>';
	exit();
}

$query2 = 'UPDATE  fabric_table SET QTY_YARDS='.$update_qty.' WHERE FABRIC_ID="'.$fabric_id.'"';
//echo $query2;
//				("'.$fabric_id.' " ,  "'.$fabric_name.' ", '.$qty_yards.', '.$price_per_qty.')';
			
				mysql_query($query2, $db) or die ("Error: ".mysql_error($db));
				echo "<br>";
				echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">Successfully Withrawn '.$qty_yards_update.'yds. from '.$fabric_name.'.Please see FABRIC INFORMATION for current stocks.</p>';
				$action = 2;
include 'logs.php'
?>

