<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>PLDT | East GMM CoreNet Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function enableButton() {
            document.getElementById("editSinNo").disabled = false;
            document.getElementById("saveButton").disabled = false;
            document.getElementById("editNodeLocation").disabled = false;
            document.getElementById("editCentralOffice").disabled = false;
            document.getElementById("editCabinetNo").disabled = false;
            document.getElementById("editNodeType").disabled = false;
            document.getElementById("editElectricMeterNo").disabled = false;
        }
    </script>

    
  </head>

  <body>

    <?php include 'includes/display_settings.inc.php' ?>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href=""><img src="assets/pldt logo.png" height="60px"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php
              require_once('includes/database_master.inc.php');
              $database_master = new DatabaseMaster();

              $query = "SELECT firstName, lastName FROM users WHERE idNo=".$_SESSION['idNo'];
              $queryResult = $database_master->querySelect($query);
              $firstName = $queryResult[0]['firstName'];
              $lastName = $queryResult[0]['lastName'];
            ?>
            <li><a><b><?php echo $firstName.' '.$lastName?></b></a></li>
            <li><a href="#" data-toggle="modal" data-target="#displaySettings">Settings</a></li>
            <li><a href="session_logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  <!-- tabs -->
  <div class="row">
      <div id="sidebar" class="tabbable">
        <div class="col-sm-3 col-md-2 sidebar">
          <div class="well">
          <ul id="sidenav" class="nav nav-pills nav-stacked">
              <li class="active"><a href="#home" data-toggle="tab"><strong>Inventory</strong></a></li>
              <li><a href="#addProject" data-toggle="tab"><strong>Add Project</strong></a></li>
              <li><a href="#export" data-toggle="tab"><strong>Export</strong></a></li>
              <li><a href="#users" data-toggle="tab"><strong>Users Management</strong></a></li>
              <li><a href="#notifications" data-toggle="tab"><strong>Notifications</strong><span class="badge">1</span></a></li>
          </ul>
          </div><!-- .well -->
        </div> <!-- col-sm -->
      </div> <!-- sidebar -->
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <h1>Inventory</h1> 
              <br>
               <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#AddNodeModal">Add Node</button>
               <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#AddCabinetModal">Add Cabinet</button>
              <br><br>
              <?php
                require_once ('includes/node_table.inc.php');
                require_once ('includes/addnode.inc.php');
                require_once ('includes/addcabinet.inc.php'); 
              ?>
            </div> <!--home div -->
            <div class="tab-pane fade" id="addProject">
              <h1>Add Project</h1>
              <?php require_once('includes/addproject.inc.php');?>
            </div> 
            <div class="tab-pane fade" id="export">
              <a href="exportNodeList.php"> 
                <button class="btn btn-success btn-lg" data-toggle="modal">Export Node List</button> 
              </a>
            </div>
            <div class="tab-pane fade" id="users">
              <h1>Users Management</h1>
              <!-- Button trigger modal -->
              <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Add Users</button>
              <br><br>
              <?php 
                require_once 'includes/user_table.inc.php';
                require_once 'includes/register.inc.php';
              ?>
            </div>

            <div class="tab-pane fade" id="notifications">
              <h1>Notifications</h1>
              <?php 
                require_once 'includes/notifications.inc.php';
              ?>
            </div>
          </div>
      </div>
  </div> <!-- row -->          
  
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#sidenav a:first').tab('show')
      })
    </script>
    <?php 
      if(isset($_GET['register'])){
        require_once('includes/register_status_modal.inc.php');
      ?>
        <script type = "text/javascript">
          $(window).load(function(){
           $('#registerStatusModal').modal('show');
          });
        </script>
    <?php
      }
      if(isset($_GET['user_delete'])){
        require_once('includes/user_delete_status_modal.inc.php')
      ?>
        <script type = "text/javascript">
          $(window).load(function(){
           $('#UserDeleteStatusModal').modal('show');
        </script>
    <?php
      }
    ?>
    
    <link rel="stylesheet" href="css/autocomplete.css" />

    <script src="js/search/jquery-1.11.0.min.js"></script>    
    <script src="js/search/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/search/search-listener.js"></script>

  </body>
</html>
