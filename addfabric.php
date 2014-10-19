 <?php

$fabric_name = $_POST['fabric_name'];
$qty_yards = $_POST['qty_add'];
$price_per_qty = $_POST['price'];
$fabric_color = $_POST['fabric_color'];
$fabric_width = $_POST['fabric_width'];
$fabric_content = $_POST['fabric_content'];


 include 'connectDB.php';


$query = 'INSERT INTO  fabric_table
			 ( FABRIC_ID, FABRIC_NAME, QTY_YARDS, PRICE_PER_QTY, FABRIC_COLOR, FABRIC_WIDTH, FABRIC_CONTENT)
			VALUES
				( "'.$fabric_name.' '.$fabric_color.'","'.$fabric_name.' ", '.$qty_yards.', '.$price_per_qty.', "'.$fabric_color.'",'.$fabric_width.', "'.$fabric_content.'")';
			
				mysql_query($query, $db) or die ('<p class="alert alert-warning"> <span class=" glyphicon glyphicon-warning-sign">&nbsp</span><strong>Oops!</strong> The Fabric ID  is already in database.');
				echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Fabric Added!</p>';
				//echo $fabric_name .$qty_yards .$price_per_qty. $fabric_color .$fabric_width .$fabric_content;
$action = 1;				
include 'logs.php';
?>

