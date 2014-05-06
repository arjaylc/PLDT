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
            <li><a href="#d3" data-toggle="tab"><strong>Users</strong></a></li>
					</ul>
					</div><!-- .well -->
				</div> <!-- col-sm -->
			</div> <!-- sidebar -->
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
			  <h1> Curbside AG/MSAN Checklist </h1>
              <br>
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">I. Basic Node Information</div>
                    <fieldset>
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
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">II. Visual Alarms </div>
                    <div class="panel-body">
                    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>UTStarcom</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">a) Check SCM Alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="WITH" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="WITHOUT">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">b) Check ICM alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">c) Check RJ45/FOC/SFP if properly connected on uplink port</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="OKAY" checked="checked">
      Okay
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="NOT OKAY">
      Not okay
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">d) Check VPM alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">e) Check IVD alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">f) Check IVD WAN LED, should be blinking</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="No">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">g) Check PRM alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

</fieldset>
</form>

				<!-- UTStarcom -->
				<!-- HUAWEI -->

				<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>HUAWEI</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Node Type</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Micro MSAN" checked="checked">
      Micro MSAN
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Mini MSAN">
      Mini MSAN
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">a) Check IPM alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">b) Check RJ45/FOC/SFP if properly connected on uplink port</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="OKAY" checked="checked">
      Okay
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="NOT OKAY">
      Not okay
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">c) Check PVM alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">d) Check PWX alarm LED</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

</fieldset>
</form>
<!-- HUAWEI -->
		</div>
		</div>
		</div>
		
		 <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">III. Environmental Condition </div>
                    <div class="panel-body">
		<!-- Cabinet Condition -->
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>A. Cabinet Condition</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Missing Doors:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Door Alignment:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="OKAY" checked="checked">
      Okay
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="NOT OKAY">
      Not okay
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Check for defective door gaskets/seals:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Check for defective/damaged locks:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Check for traces of infestation</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Check for any means of ingress (cable ducts, door seals, etc):</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Is periodic cleaning maintained inside and outside?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="No">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Encroachment with other establishments/structures:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="With" checked="checked">
      With
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Without">
      Without
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Condition of iron protective cage</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Okay" checked="checked">
      Okay
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Not okay">
      Not okay
    </label>
  </div>
</div>

</fieldset>
</form>
 <!-- Cabinet condition -->


                        </div>
                      </div>
                    </div>
                  </div>
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
