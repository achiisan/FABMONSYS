 <?php

include 'navbar.php';

	$fabric_id = $_GET['fabric_id'];


 include 'connectDB.php';

$query = 'SELECT * FROM  fabric_table WHERE FABRIC_ID="'.$fabric_id.'" ';

$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');

$list = mysql_fetch_array($result);

extract($list) or die ('<p class="alert alert-warning">Search Query Returned No Result.</p>');

$fabric_name = $FABRIC_NAME;
$qty_yards = $QTY_YARDS;
$price_per_qty = $PRICE_PER_QTY;
$fabric_color = $FABRIC_COLOR;
$fabric_width = $FABRIC_WIDTH;
$fabric_content = $FABRIC_CONTENT;


echo '<h6 class="panel-heading">FABRIC INFORMATION</h6>';
echo '<h1>'.$fabric_name.'</h1>';
echo '     <h5><strong>Color:</strong> '.$fabric_color.'</h5>';
echo '     <h5><strong>Fabric ID:</strong> '.$fabric_id.'</h5>';
echo '     <h5><strong>Width:</strong> $'.$fabric_width.'</h5>';
echo '     <h5><strong>Fabric Content:</strong> $'.$fabric_content.'</h5>';

echo '     <h5><strong>Quantity of fabric in Stock:</strong> '.$qty_yards.' yds.</h5>';
echo '     <h5><strong>Price per yard:</strong> $'.$price_per_qty.'</h5>';


include 'footer.php';
?>

