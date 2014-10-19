<?php
//MYSQL DATABASE
$db = mysql_connect('http://mysql.hostinger.ph', 'u820865224_admin', '') or
	die('Unable to Connect to mySQL');

	$query = 'CREATE DATABASE IF NOT EXISTS alpinex_fabmonsys';
mysql_query($query, $db) or die(mysql_error($db));
   mysql_select_db('alpinex_fabmonsys', $db) or die(mysql_error($db));

?>
      
    

