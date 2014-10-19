<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>

<table class="table table-hover">
<tr>
<th>Fabric ID</th>
<th>Fabric Name</th>
<th>Color</th>
<th>Width</th>
<th>Fabric Content</th>
<th>Balance</th>
<th>Price/Yard</th>
<th>Total Amount</th>
</tr>
<?php
	$action_window = "'action_window'";
	while($row = mysql_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['FABRIC_ID'] . "</td>";
		  echo "<td>" . $row['FABRIC_NAME'] . "</td>";
		  echo "<td>" . $row['FABRIC_COLOR'] . "</td>";
		  echo "<td>" . $row['FABRIC_WIDTH'] . "</td>";
		  echo "<td>" . $row['FABRIC_CONTENT'] . "</td>";
		  echo "<td>" . $row['QTY_YARDS'] . "</td>";
		  echo "<td>" . $row['PRICE_PER_QTY'] . "</td>";
		  $total_amount = $row['QTY_YARDS'] * $row['PRICE_PER_QTY'];
		  echo "<td>" . $total_amount . "</td>";
		  echo '<td><a id="test" onclick="toggle_visibility('.$action_window.')"><button type="button" class="btn btn-info">Actions</button></a></td>';
		  echo "</tr>";
}
?>
</table>
<div id="action_window">
	<?php
		echo $row['FABRIC_ID'];
	?>
	</div>
