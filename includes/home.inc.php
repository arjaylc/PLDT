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
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
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
              <h1>Dashboard</h1>
              <br>
              <?php require_once ('includes/node_table.inc.php');?>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">Checklist</div>
                    <div class="panel-body">
                      <fieldset>
                        <legend>Basic Node Information</legend>
                        <form role="form">
                          <label for="nodeName" class="col-sm-2 control-label">Node Name</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="nodeName">
                          </div><br><br>
                          <label for="inspectedBy" class="col-sm-2 control-label">Inspected By</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inspectedBy">
                          </div><br><br>
                          <label for="typeOfCabinet" class="col-sm-2 control-label">Type of Cabinet</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="typeOfCabinet">
                          </div><br><br>
                          <label for="dateAndTime" class="col-sm-2 control-label">Date & Time Assessed</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="dateAndTime">
                          </div>
                        </form>
                      </fieldset>
                      <br><br>
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                          <legend>Visual Alarms</legend>
                          <form role="form">
                            <label for="nodeName" class="col-sm-2 control-label">Node Name</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="nodeName">
                            </div><br><br><br>
                            <label for="inspectedBy" class="col-sm-2 control-label">Inspected By</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inspectedBy">
                            </div><br><br><br>
                            <label for="typeOfCabinet" class="col-sm-2 control-label">Type of Cabinet</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="typeOfCabinet">
                            </div><br><br><br>
                            <label for="dateAndTime" class="col-sm-2 control-label">Date & Time Assessed</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="dateAndTime">
                            </div>
                          </form>
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                          <legend>Environment Condition</legend>
                          <form role="form">
                            <label for="nodeName" class="col-sm-2 control-label">Node Name</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="nodeName">
                            </div><br><br><br>
                            <label for="inspectedBy" class="col-sm-2 control-label">Inspected By</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inspectedBy">
                            </div><br><br><br>
                            <label for="typeOfCabinet" class="col-sm-2 control-label">Type of Cabinet</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="typeOfCabinet">
                            </div><br><br><br>
                            <label for="dateAndTime" class="col-sm-2 control-label">Date & Time Assessed</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="dateAndTime">
                            </div>
                          </form>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="d1">
              <h1>Dashboard 1</h1>
            </div>
            <div class="tab-pane fade" id="d2">
              <h1>Dashboard 2</h1>
            </div>
            <div class="tab-pane" id="users">
              <h1>Users Management</h1>
			  <!-- Button trigger modal -->
					<button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
					  Add Users
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h2>Add User</h2>
						  </div>
						  <div class="modal-body">
							<?php include 'includes/register.inc.php';?>
						</div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						  </div>
						    
						</div>
					  </div>
					</div>
				<div class="table-responsive">  
				<br>
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">User List</div>
                  <!-- Table -->
                  <table class="table">
                    <tr>
                      <th>ID#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Position</th>
                      <th>Office</th>
					  <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Lorem</td>
                      <td>Ipsum</td>
                      <td>Dolor</td>
                      <td>Sit</td>
					  <th> <button class="btn btn-danger">
					  Edit
					</button> 
					<button class="btn btn-danger">
					  Delete
					</button> </th>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lorem</td>
                      <td>Ipsum</td>
                      <td>Dolor</td>
                      <td>Sit</td>
					  <th> <button class="btn btn-danger">
					  Edit
					</button>
					 <button class="btn btn-danger">
					  Delete
					</button> </th>
                    </tr>
                  </table>
                </div>
              </div>
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
