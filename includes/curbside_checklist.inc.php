
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="tab-content">
    <div class="tab-pane fade in active" id="home">
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

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check SCM Alarm LED</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
						<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check ICM Alarm LED</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
						<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check RJ45/GOC/SFP if properly connected on uplink port</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">Okay</button>
						<button id="button2id" name="button2id" class="btn btn-primary">Not okay</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check VPM alarm LED</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
						<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check IVD alarm LED</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
						<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check IVD WAN LED, should be blinking</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">YES</button>
						<button id="button2id" name="button2id" class="btn btn-primary">NO</button>
					</div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id">Check PRM alarm LED</label>
					<div class="col-md-8">
						<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
						<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
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

		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="button1id">Node Type:</label>
			<div class="col-md-8">
				<button id="button1id" name="button1id" class="btn btn-primary">Micro MSAN</button>
				<button id="button2id" name="button2id" class="btn btn-primary">Mini MSAN</button>
			</div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="button1id">Check IPM Alarm LED</label>
			<div class="col-md-8">
				<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
				<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
			</div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="button1id">Check RJ45/GOC/SFP if properly connected on uplink port</label>
			<div class="col-md-8">
				<button id="button1id" name="button1id" class="btn btn-success">Okay</button>
				<button id="button2id" name="button2id" class="btn btn-primary">Not okay</button>
			</div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="button1id">Check PVM alarm LED</label>
			<div class="col-md-8">
				<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
				<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
			</div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="button1id">Check PWX alarm LED</label>
			<div class="col-md-8">
				<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
				<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
			</div>
		</div>

	</fieldset>
</form> <!-- HUAWEI -->
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

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Missing Doors:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Door Alignment:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">Okay</button>
			<button id="button2id" name="button2id" class="btn btn-primary">Not okay</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Check for defective door gaskets/seals:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Check  for defective/damaged locks:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Check for traces of infestation:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Check for any means of ingress (cable ducts, door seals, etc)</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Is periodic cleaning maintained inside and outside?</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">YES</button>
			<button id="button2id" name="button2id" class="btn btn-primary">NO</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Encroachment with other establishments/structures:</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">WITH</button>
			<button id="button2id" name="button2id" class="btn btn-primary">WITHOUT</button>
		</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="button1id">Condition of iron protective cage</label>
		<div class="col-md-8">
			<button id="button1id" name="button1id" class="btn btn-success">Okay</button>
			<button id="button2id" name="button2id" class="btn btn-primary">Not okay</button>
		</div>
	</div>

	</fieldset>
	</form> <!-- Cabinet condition -->


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
