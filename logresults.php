<?php include "navbar.php";?>
	<div class="row">
		
		<div class="col-lg-12 panel panel-default">

			<h6 class="panel-heading">LOGS</h6>
			 
					 <?php




					 include 'connectDB.php';

					$query = 'SELECT * FROM  logs' ;

					$result = mysql_query($query, $db) or die ('<p class="alert alert-warning">Search Query Returned No Result. :(</p>');

					
					?>

					<table class="table table-hover">
						<tr>
						<th>Date</th>
						<th>Action Performed</th>
						
						<th>Fabric Name</th>
						<th>Fabric Color</th>
						<th>Yards Added</th>
						<th>Yards Removed</th>
						<th>Current Available Balance</th>
						<th>Account</th>
						<th>Style</th>
						<th>Breakdown 3m - 9m</th>
						<th>Breakdown 12m - 24m</th>
						<th>Breakdown 2t- 4t</th>
						<th>Breakdown 5y - 8y</th>
						</tr>
						<?php
							while($row = mysql_fetch_array($result)) {
								  echo "<tr>";
								  echo "<td>" . $row['DATE'] . "</td>";
								  echo "<td>" . $row['LOG_ACTION'] . "</td>";
								  
								  echo "<td>" . $row['LOG_FABRIC_NAME'] . "</td>";
								  echo "<td>" . $row['LOG_COLOR'] . "</td>";	 
								  echo "<td>" . $row['LOG_YARDS_ADDED'] . "</td>";
								  echo "<td>" . $row['LOG_YARDS_REMOVED'] . "</td>";
								  echo "<td>" . $row['LOG_QTY_YARDS'] . "</td>";
								  echo "<td>" . $row['LOG_ACCOUNT'] . "</td>";
								  echo "<td>" . $row['LOG_STYLE'] . "</td>";
								  echo "<td>" . $row['LOG_3M9M'] . "</td>";
								  echo "<td>" . $row['LOG_12M24M'] . "</td>";
								  echo "<td>" . $row['LOG_2T4T'] . "</td>";
								  echo "<td>" . $row['LOG_5Y8Y'] . "</td>";
								  echo "</tr>";
						}
						?>
						</table>


		</div>
		
	</div>
	
<?php include "footer.php";?>