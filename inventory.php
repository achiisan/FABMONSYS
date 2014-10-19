 
 <?php




 include 'connectDB.php';

$query = 'SELECT * FROM  fabric_table' ;

$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');

include 'fabriclisttable.php'
?>

