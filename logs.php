<?php
	


//$log_fabric_id = $_POST['fabric_id'];
//$log_fabric_name = $_POST['fabric_name'];
//$log_fabric_color = $_POST['fabric_color'];
//$log_qty_yards_add = $_POST['qty_add'];
//$log_qty_yards_remove = $_POST['qty_remove'];
//$log_qty_yards = $_POST['qty_add'];
//$log_account = $_POST['log_account'];
//$log_style = $_POST['log_style'];
//$log_3M-9M = $_POST['log_3m-9m'];
//$log_12M-24M = $_POST['log_12m-24m'];
//$log_2T-4T = $_POST['log_2t-4t'];
//$log_5Y-8Y = $_POST['log_5y-8y'];

	if ($action == 1){
		$log_fabric_id = $_POST['fabric_id'];
		$log_fabric_name = $_POST['fabric_name'];
		$log_fabric_color = $_POST['fabric_color'];
		$log_qty_yards_add = $_POST['qty_add'];
		$log_qty_yards = $_POST['qty_add'];

		$query = 'INSERT INTO  logs
			 (DATE, LOG_ACTION, LOG_FABRIC_ID, LOG_FABRIC_NAME, LOG_YARDS_ADDED,  LOG_QTY_YARDS, LOG_COLOR)
			VALUES
				(now(), "NEW FABRIC", "'.$log_fabric_id.'","'.$log_fabric_name.' ", '.$log_qty_yards_add.','.$log_qty_yards.', "'.$log_fabric_color.'")';
			
				mysql_query($query, $db) or die (mysql_error($db));
				//echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Fabric Added!</p>';
				//echo $fabric_name .$qty_yards .$price_per_qty. $fabric_color .$fabric_width .$fabric_content;
	}

	else if ($action ==2){
		$log_fabric_id = $_POST['fabric_id'];
		$log_fabric_name = $fabric_name;
		$log_fabric_color = $fabric_color;
		$log_qty_yards_remove = $_POST['qty_remove'];
		$log_qty_yards = $qty_yards -  $_POST['qty_remove'];
		$log_account = $_POST['log_account'];
		$log_style = $_POST['log_style'];
		$log_3m9m = $_POST['log_3m-9m'];
		$log_12m24m = $_POST['log_12m-24m'];
		$log_2t4t = $_POST['log_2t-4t'];
		$log_5y8y = $_POST['log_5y-8y'];

		echo "Heloow";
		$query = 'INSERT INTO  logs
			 (DATE, LOG_ACTION, LOG_FABRIC_ID, LOG_FABRIC_NAME, LOG_YARDS_REMOVED,  LOG_QTY_YARDS, LOG_COLOR, LOG_ACCOUNT, LOG_STYLE, LOG_3M9M, LOG_12M24M, log_2T4T, log_5Y8Y)
			VALUES
				(now(), "WITHRAW FABRIC", "'.$log_fabric_id.'","'.$log_fabric_name.' ", '.$log_qty_yards_remove.','.$log_qty_yards.', "'.$log_fabric_color.'", "'.$log_account.'", "'.$log_style.'", '.$log_3m9m.' ,'.$log_12m24m.' ,'.$log_2t4t.', '.$log_5y8y.')';
			
				mysql_query($query, $db) or die (mysql_error($db));
				//echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Fabric Added!</p>';
				//echo $fabric_name .$qty_yards .$price_per_qty. $fabric_color .$fabric_width .$fabric_content;
	}

	else if ($action == 3 ){
		echo "Hi!";

	}







?>