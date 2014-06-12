<h1> Reports </h1>
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#addReportModal">Add Report</button>

<!-- Add Report Modal -->
<div class="modal fade" id="addReportModal" tabindex="-1" role="dialog" aria-labelledby="addReportModal" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h2>Add Report</h2>
	    </div>
	    <div class="modal-body">
	    	<div id="register-overlay" class = "form">
	    		<form class="form-horizontal" role="form" action="check_report.php" method="POST"> <!--- -->
	    			<div class="form-group">
	    				<label for="reportTitle" class="col-sm-4 control-label">Report Title</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="reportTitle" placeholder="Enter Report Title" name="title">
	    				</div>
	    			</div>

					<div class="form-group">
	    				<label for="reportedTo" class="col-sm-4 control-label">Recipient</label>
	    				<div class="col-sm-7">
	    					<input type="text" class="form-control" id="reportedTo" placeholder="Enter ID Number" name="idNo">
	    				</div>
	    			</div>

	    			<div class="form-group">
						<label class="col-sm-4 control-label">Node or Cabinet</label>
						<div class="row">

				            <input type="radio" name="radios2" id="reportNodeRadio" value="With" checked="checked"
				            onclick="enableReportNodeInput()">
				            <label for="reportNodeRadio">Node</label>
				            <input type="radio" name="radios2" id="reportCabinetRadio" value="Without"
				            onclick="enableReportCabinetInput()">
				            <label for="reportCabinetRadio">Cabinet</label>
						</div>
					</div>

					<div id="reportNodeNameDiv" class="form-group">
						<label for="reportNodeName" class="col-sm-4 control-label">Node Name</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="reportNodeName" name="nodeName"
							placeholder = "Enter Node Name">
						</div>
					</div>

					<div id="reportCabinetNoDiv" class="form-group" style="display:none;">
						<label for="reportCabinetNo" class="col-sm-4 control-label">Cabinet Number</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="reportCabinetNo" name="cabinetNo"
							disabled placeholder = "Enter Cabinet Number">
						</div>
					</div>

									
					
					<div class="form-group">
						<label for="reportFaultDescription" class="col-sm-4 control-label">Fault Description</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" id="reportFaultDescription" placeholder="Enter Description" name="faultDescription"></textarea>
						</div>
					</div>
					
					
					
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Assign</button>
					</div>
				</form>
			</div>
	    </div>
	  </div>
	</div>
</div> <!-- end Add Project Modal -->

<script>
	var nodeNameDiv = document.getElementById("reportNodeNameDiv");
	var cabinetNoDiv = document.getElementById("reportCabinetNoDiv");
	function enableReportNodeInput(){
		nodeNameDiv.style.display="";
		cabinetNoDiv.style.display="none";
		document.getElementById("reportNodeName").disabled=false;
		document.getElementById("reportCabinetNo").disabled=true;
		document.getElementById("reportCabinetNo").value="";
	}
	function enableReportCabinetInput(){
		nodeNameDiv.style.display="none";
		cabinetNoDiv.style.display="";
		document.getElementById("reportNodeName").disabled=true;
		document.getElementById("reportCabinetNo").disabled=false;
		document.getElementById("reportNodeName").value="";
	}
</script>