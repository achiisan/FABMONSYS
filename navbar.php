<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabric Monitoring System</title>

     <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
      






    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.php" class="navbar-brand">FabMonSys: Fabric Monitoring System</a>
          </div>
          <!--<div class="collapse navbar-collapse" id="navbar-links">-->
          <ul class="nav navbar-nav">
            <li><a href="form_addfabric.php" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Fabric </a></li>
            <li><a href="form_withrawfabric.php"><span class="glyphicon glyphicon-minus"></span>&nbsp;Withraw Fabric</a></li>
            <li><a href="inventory_page.php"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Inventory</a></li>
            <li><a href="logresults.php"><span class="glyphicon glyphicon-book"></span>&nbsp;Logs</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search" method="post" action="searchresults.php">
            <div class="form-group">
              <input type="text" name="fabric_id" class="form-control" placeholder="Search">
            </div>
           
          </form>

          <!--</div>-->

      </div><!-- /.container-fluid -->
    </nav>

  </head>
  <body>
      <div class="container-fluid">

    
