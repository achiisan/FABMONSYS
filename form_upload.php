<!DOCTYPE html>
<html>	 

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

     <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
       <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Upload Photo</a>
          </div>
          <!--<div class="collapse navbar-collapse" id="navbar-links">-->
         
           
          </form>

          <!--</div>-->

      </div><!-- /.container-fluid -->
    </nav>

     <?php 


      include "connectDB.php"
     ?>

  
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	 <form action="upload.php" enctype="multipart/form-data" method="post" >

	  <input type="file" name="file" id="file"><br>
	  <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
	</form>
 

      <?php include "footer.php";?>
</html>