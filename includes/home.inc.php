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
  </head>

  <body>

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
            <li><a href="#">Settings</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="session_logout.php">Log Out</a></li>
          </ul>
         <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> 
        </div>
      </div>
    </div>
	<!-- tabs -->
	<div class="row">
			<div id="sidebar" class="tabbable">
				<div class="col-sm-3 col-md-2 sidebar">
					<div class="well">
					<ul id="sidenav" class="nav nav-pills nav-stacked">
						<li class="active"><a href="#home" data-toggle="tab"><strong>Reports</strong></a></li>
						<li><a href="#d1" data-toggle="tab"><strong>Maintenance</strong></a></li>
						<li><a href="#d2" data-toggle="tab"><strong>Export</strong></a></li>
            <li><a href="#users" data-toggle="tab"><strong>Users Management</strong></a></li>
					</ul>
					</div><!-- .well -->
				</div> <!-- col-sm -->
			</div> <!-- sidebar -->
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <h1>Reports</h1> 
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
            <div class="tab-pane fade" id="d1">
              <h1>Maintenance</h1>
              <?php require_once('includes/curbside_checklist.inc.php');?>
            </div>
            <div class="tab-pane fade" id="d2">
            <a href="exportNodeList.php"> <button class="btn btn-success btn-lg" data-toggle="modal">Export Node List</button> </a>
            </div>
            <div class="tab-pane fade" id="users">
              <h1>Users Management</h1>
              <!-- Button trigger modal -->
              <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Add Users</button>
              <?php 
              	require_once 'includes/user_table.inc.php';
              	require_once 'includes/register.inc.php';
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
  </body>
</html>
