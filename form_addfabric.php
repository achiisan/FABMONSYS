
<!DOCTYPE html>
<?php
	session_unset();
	?>



		<h2>Add Fabric</h2>

			<form method="post" action="addfabric.php">
			<p>
				Fabric ID:
				<input type="text" name="fabric_id"/>
			</p>
			<p> 
				Fabric Name:
				<input type="text" name="fabric_name"/>
			</p>

			<p> 
				Quantity:
				<input type="text" name="qty"/>
			</p>

			<p> 
				Price Per Quantity:
				<input type="text" name="price"/>
			</p>
			<input type="submit" name="submit" value="Submit"/>
		</form>

