 <?php




 include 'connectDB.php';

$query = 'SELECT * FROM  fabric_table' ;

$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');


	$total_fabrics = 0;
	$total_yards = 0;
	$total_cost = 0;
	while($row = mysql_fetch_array($result)) {
		 
		 $total_fabrics ++;
		  $total_yards = $total_yards + $row['QTY_YARDS'];
		  $total_amount = $row['QTY_YARDS'] * $row['PRICE_PER_QTY'];
		 $total_cost = $total_cost+ $total_amount;
		 
}

				echo'<h3>'.$total_fabrics.' Fabrics in Stock</h3>';
  				echo'<h3> A total of '.$total_yards.' yards of Fabrics</h3>';
  				echo'<h3>A total cost of $'.$total_cost.' for all Garments</h3>';

?>
