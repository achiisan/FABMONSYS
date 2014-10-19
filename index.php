
     <?php include "navbar.php";
      include "connectDB.php"
     ?>

     


  	<div class="row">
  	<div class="col-lg-1">
  	</div>
  	<div class="col-lg-8 col-xs-12">
	  	<div class="row">	
	  		<div class="col-lg-6">
	  			<div class="panel panel-default well">
		  			<h2>Hello! <?php echo "Today is " . date("l,") .' '. date("F d,Y") . "<br>"; ?> </h2>
		  			<h6>Fabric Monitoring System for Alpine International Exports, Inc</h6>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<div class="panel panel-default">
		  			<div class="panel-heading">Fabric Statistics</div>
		  			<div class="row" style="margin-left: 5%;">
		  				<?php include "counter.php" ?>
		  			</div>
		  		</div>
		  		<div class="panel panel-default">
		  			
		  			
		  			
		  		</div>
	  		</div>
  		
  	</div>
  	<div class="col-lg-1">
  	</div>
  	</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
 

      <?php include "footer.php";?>