 <?php

$fabric_id = $_POST['fabric_id'];
$fabric_name = $_POST['fabric_name'];
$qty_yards = $_POST['qty'];
$price_per_qty = $_POST['price'];

 include 'connectDB.php';

$query = 'INSERT INTO  fabric_table
			 (FABRIC_ID, FABRIC_NAME, QTY_YARDS, PRICE_PER_QTY)
			VALUES
				("'.$fabric_id.' " ,  "'.$fabric_name.' ", '.$qty_yards.', '.$price_per_qty.')';
			
				mysql_query($query, $db) or die ("Error: ".mysql_error($db));
				echo "Successful Operation.";
				//echo '<a href="order-area.php">Back <-</a>';

?>

