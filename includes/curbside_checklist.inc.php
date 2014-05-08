
<div class="col-sm-9 col-md-10 main">
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
<input type="radio" name="radios1" id="radios-0" value="WITH" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios1" id="radios-1" value="WITHOUT">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">b) Check ICM alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios2" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios2" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">c) Check RJ45/FOC/SFP if properly connected on uplink port</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios3" id="radios-0" value="OKAY" checked="checked">
Okay
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios3" id="radios-1" value="NOT OKAY">
Not okay
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">d) Check VPM alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios4" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios4" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">e) Check IVD alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios5" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios5" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">f) Check IVD WAN LED, should be blinking</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios6" id="radios-0" value="Yes" checked="checked">
Yes
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios6" id="radios-1" value="No">
No
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">g) Check PRM alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios7" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios7" id="radios-1" value="Without">
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
<input type="radio" name="radios8" id="radios-0" value="Micro MSAN" checked="checked">
Micro MSAN
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios8" id="radios-1" value="Mini MSAN">
Mini MSAN
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">a) Check IPM alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios9" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios9" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">b) Check RJ45/FOC/SFP if properly connected on uplink port</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios10" id="radios-0" value="OKAY" checked="checked">
Okay
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios10" id="radios-1" value="NOT OKAY">
Not okay
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">c) Check PVM alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios11" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios11" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">d) Check PWX alarm LED</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios12" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios12" id="radios-1" value="Without">
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
<input type="radio" name="radios13" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios13" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Door Alignment:</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios14" id="radios-0" value="OKAY" checked="checked">
Okay
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios14" id="radios-1" value="NOT OKAY">
Not okay
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Check for defective door gaskets/seals:</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios15" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios15" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Check for defective/damaged locks:</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios16" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios16" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Check for traces of infestation</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios17" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios17" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Check for any means of ingress (cable ducts, door seals, etc):</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios18" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios18" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Is periodic cleaning maintained inside and outside?</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios19" id="radios-0" value="Yes" checked="checked">
Yes
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios19" id="radios-1" value="No">
No
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Encroachment with other establishments/structures:</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios20" id="radios-0" value="With" checked="checked">
With
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios20" id="radios-1" value="Without">
Without
</label>
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Condition of iron protective cage</label>
<div class="col-md-4"> 
<label class="radio-inline" for="radios-0">
<input type="radio" name="radios21" id="radios-0" value="Okay" checked="checked">
Okay
</label> 
<label class="radio-inline" for="radios-1">
<input type="radio" name="radios21" id="radios-1" value="Not okay">
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