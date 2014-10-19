 <?php

$fabric_id = $_POST['fabric_id'];


 include 'connectDB.php';

$query = 'SELECT * FROM  fabric_table WHERE FABRIC_ID LIKE "%'. $fabric_id.'%" OR FABRIC_NAME LIKE "%' .$fabric_id.'%" OR FABRIC_COLOR LIKE "%' .$fabric_id.'%" ' ;

$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');

include 'fabriclisttable.php'
?>

