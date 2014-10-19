 <?php

$fabric_id = $_POST['fabric_id'];


 include 'connectDB.php';

$query = 'SELECT * FROM  fabric_table WHERE FABRIC_ID="'.$fabric_id.'" ';

$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');

$list = mysql_fetch_array($result);

extract($list) or die ('<p class="alert alert-warning">Search Query Returned No Result.</p>');


$fabric_name = $FABRIC_NAME;
$qty_yards = $QTY_YARDS;
$price_per_qty = $PRICE_PER_QTY;
$fabric_color = $FABRIC_COLOR;



?>

