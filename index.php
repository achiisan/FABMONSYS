<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="main-container" class="container-fluid">
      <div id="header" class="navbar navbar-fluid">
          <h3 class="navbar-brand">Alpine Fabric Monitoring System <h3>
      </div>
      <div id="home-row" class="row">
          <div class="col-xs-2">
              <div class="list-group">
                 
                  <a href="#" class="list-group-item">Add Fabric</a>
                  <a href="#" class="list-group-item">Withraw Fabric</a>
                  <a href="#" class="list-group-item">Generate Inventory</a>
                  <a href="#" class="list-group-item">Update Fabric</a>
              </div>



          </div>
          <div class="col-xs-10">
              <?php include "form_addfabric.php"?>
          </div>
      </div>
    </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>