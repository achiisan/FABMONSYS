<?php

$db = mysql_connect('localhost', 'alpinex_admin', 'NUdjPQamTUcH7Ybb') or
	die('Unable to Connect to mySQL');

mysql_select_db('alpinex_fms', $db) or die(mysql_error($db));

?>