<?php
	session_unset();
	?>

	
	<?php include "navbar.php";?>     
		 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	  <!-- Bootstrap -->    
	<script type="text/javascript">
				
	$(document).ready(function(){
		$("#form-template").validate({
			
			submitHandler: function(form) {
				
				$.post('withrawfabric.php', $("#form-template").serialize(), function(data) {
					$('#results').html(data);

				});

				$.post('search.php', $("#form-template").serialize(), function(data) {
					$('#fabric-info').html(data);

				});
			}
		});
	});
	</script>
		<div class="row">
			
			<div class="col-lg-4"></div>
			<div class="col-xs-12 col-lg-4">
				
				
					
					<form role="form" class="panel panel-default"name="form-template" id="form-template" method="post">
						<div class="panel-heading"><strong>Withraw Fabric</strong></div>
						<div class="panel-body">
							<div id="results"></div>

							<div class="form-group">
								<label for="fabric-id">Enter Fabric (Fabric Name + Fabric Color)  </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Fabric</strong></span>
									<input class="form-control"type="text" id="fabric_id"  placeholder="Example : Corduroy Red" name="fabric_id"/>
								</div>
							</div>
							
							
							<div class="form-group">
								<label for="qty">Quantity: </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Yards</strong></span>
									<input class="form-control" type="text" id="qty_remove"  placeholder="Example :100" name="qty_remove"/>
								</div>
							</div>

							<div class="form-group">
								<label for="log_account">Account for:</label>
								<div class="input-group">
									<select name="log_account">
										<option value="Malvi">Malvi & Co</option>
										<option value="Renzo">Renzo</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="log_style">Style:</label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Style: </strong></span>
									<input class="form-control" type="text" id="log_style"  placeholder="Example :123" name="log_style"/>
								</div>
							</div>


							<div class="form-group">
								<label for="size_breakdown">Size Breakdown</label>
								<div class="input-group">
									<span class="input-group-addon"><strong>3m-9m</strong></span>
									<input class="form-control" type="text" id="log_3m-9m"  name="log_3m-9m"/>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><strong>12m-24m</strong></span>
									<input class="form-control" type="text" id="log_12m-24m"  name="log_12m-24m"/>
								</div>
								<div class="input-group">	
									<span class="input-group-addon"><strong>2T-4T</strong></span>
									<input class="form-control" type="text" id="log_2t-4t"  name="log_2t-4t"/>
								</div>
								<div class="input-group">	
									<span class="input-group-addon"><strong>5Y-8Y</strong></span>
									<input class="form-control" type="text" id="log_5y-8y"  name="log_5y-8y"/>
								</div>
							</div>


							<input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="showHide('results','inline');" />
						</div>
					</form>
				
				
				
			</div>
			<div class="col-lg-4 col-xs-12">
			
			</div>
		</div>

		<?php include "footer.php";?>  

		

