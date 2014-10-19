<?php
include 'connectDB.php';

$query = 'CREATE TABLE fabric_table(
				FABRIC_ID VARCHAR(64),
				FABRIC_NAME VARCHAR(128),
				FABRIC_COLOR VARCHAR(256),
				FABRIC_WIDTH DOUBLE,
				FABRIC_CONTENT VARCHAR(256),
				QTY_YARDS INT,
				PRICE_PER_QTY INT,


				PRIMARY KEY(FABRIC_ID)

			)
			ENGINE = InnoDB';

mysql_query($query, $db) or die (mysql_error($db));

$query = 'CREATE TABLE logs(
				DATE VARCHAR(64),
				LOG_ACTION VARCHAR(64),
				LOG_FABRIC_ID VARCHAR(64),
				LOG_FABRIC_NAME VARCHAR(64),
				LOG_COLOR VARCHAR(64),
				LOG_YARDS_ADDED INT,
				LOG_YARDS_REMOVED INT,
				LOG_QTY_YARDS INT,
				LOG_ACCOUNT VARCHAR (64),
				LOG_STYLE VARCHAR(64),
				LOG_3M9M INT,
				LOG_12M24M INT,
				LOG_2T4T INT,
				LOG_5Y8Y INT,


				PRIMARY KEY(DATE)

			)
			ENGINE = InnoDB';

mysql_query($query, $db) or die (mysql_error($db));

?>