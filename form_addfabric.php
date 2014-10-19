
<?php
	session_unset();

	include "connectDB.php";
	?>

	
	<?php include "navbar.php";?>     
		 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	  <!-- Bootstrap --> 
	     
	  	<script type="text/javascript">
				
	$(document).ready(function(){
		$("#form-template").validate({
			
			submitHandler: function(form) {
				
				$.post('addfabric.php', $("#form-template").serialize(), function(data) {
					$('#results').html(data);

				});

			

				
			}
		});
	});
	</script>

	
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-xs-12 col-lg-4">
				
				
					
					<form role="form" enctype="multipart/form-data" class="panel panel-default"name="form-template" id="form-template" method="post" ">
						<div class="panel-heading"><strong>New Fabric</strong></div>
						<div class="panel-body">
							<div id="results"></div>

						
							
							<div class="form-group">
								<label for="fabric_name">Fabric Name: </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Name</strong></span>
									<input class="form-control" type="text" id="fabric_name"  placeholder="Example : Corduroy Style # 5" name="fabric_name"/>
								</div>
							</div>

							<div class="form-group">
								<label for="fabric_color">Fabric Color: </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Color</strong></span>
									<input class="form-control" type="text" id="fabric_color"  placeholder="Example: Red" name="fabric_color"/>
								</div>
							</div>

							<div class="form-group">
								<label for="fabric_width">Fabric Width: </label>
								<div class="input-group">
									
									<input class="form-control" type="text" id="fabric_width"  placeholder="Example: 42" name="fabric_width"/>
									<span class="input-group-addon"><strong>inches</strong></span>
								</div>
							</div>

							<div class="form-group">
								<label for="fabric_content">Fabric Content: </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Comments</strong></span>
									<input class="form-control" type="text" id="fabric_content"  placeholder="Example: 100% Cotton" name="fabric_content"/>
									
								</div>
							</div>


							<div class="form-group">
								<label for="qty">Quantity: </label>
								<div class="input-group">
									<span class="input-group-addon"><strong>Yards</strong></span>
									<input class="form-control" type="text" id="qty_add"  placeholder="Example :100" name="qty_add"/>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Price Per Yard</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
									<input class="form-control" type="text" id="price"  placeholder="Example : 10" name="price"/>
								</div>
							</div>


							 <div class="form-group">
							    <label for="file">Upload Fabric Swatch</label>
							   <a class="btn btn-default" href="form_upload.php" target="popup" onclick="window.open('form_upload.php','name','width=600,height=400')">Open page in new window</a>
							    </div>

							 
							<input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="showHide('results','inline');" />
						</div>
					</form>
				
				
				
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>

		<?php include "footer.php";?>  

		
