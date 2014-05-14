<div class="col-sm-9 col-md-10 main">
  <h1> Curbside AG/MSAN Checklist </h1>
  <div class="panel panel-default"> <!-- Start of Basic Node Information -->
    <div class="panel-heading">I. Basic Node Information</div>
    <div class="panel-body">
      <form role="form">
        <div class="row">
          <label for="nodeName" class="col-md-4 control-label">Node Name</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="nodeName">
          </div>
        </div>
        <div class="row">
          <label for="inspectedBy" class="col-md-4 control-label">Inspected By</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="inspectedBy">
          </div>
        </div>
        <div class="row">
          <label for="typeOfCabinet" class="col-md-4 control-label">Type of Cabinet</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="typeOfCabinet">
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Date & Time Assessed</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="dateAndTime">
          </div>
        </div>
      </form>
    </div>
  </div> <!--End of Basic Node Information -->

  <div class="panel panel-default"> <!-- Start of Visual Alarms -->
    <div class="panel-heading">II. Visual Alarms</div>
    <div class="panel-body">
      <form role="form">
        <div class="row">
          <label for="nodeName" class="col-md-4 control-label">Check SCM Alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios1" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios1" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="inspectedBy" class="col-md-4 control-label">Check ICM alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios2" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios2" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="typeOfCabinet" class="col-md-4 control-label">Check RJ45/FOC/SFP if properly connected on uplink port</label>
          <div class="col-md-8">
            <input type="radio" name="radios3" id="radios-0" value="Okay" checked="checked">Okay
            <input type="radio" name="radios3" id="radios-1" value="Not Okay">Not okay
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check VPM alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios4" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios4" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check IVD alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios5" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios5" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check IVD WAN LED, should be blinking</label>
          <div class="col-md-8">
            <input type="radio" name="radios6" id="radios-0" value="Yes" checked="checked">Yes
            <input type="radio" name="radios6" id="radios-1" value="No">No
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check PRM alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios7" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios7" id="radios-1" value="Without">Without
          </div>
        </div>
      </form>
    </div>
  </div> <!--End of Visual Alarms -->
   
  <div class="panel panel-default"> <!-- Start of Visual Alarms -->
    <div class="panel-heading">UTStarcom/HUAWEI</div>
    <div class="panel-body">
      <form role="form">
        <div class="row">
          <label for="nodeName" class="col-md-4 control-label">Node Type</label>
          <div class="col-md-8">
            <input type="radio" name="radios15" id="radios-0" value="Micro MSAN" checked="checked">Micro MSAN
            <input type="radio" name="radios15" id="radios-1" value="Mini MSAN">Mini MSAN
          </div>
        </div>
        <div class="row">
          <label for="inspectedBy" class="col-md-4 control-label">a) Check IPM alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios16" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios16" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">b) Check RJ45/FOC/SFP if properly connected on uplink port</label>
          <div class="col-md-8">
            <input type="radio" name="radios17" id="radios-0" value="Okay" checked="checked">Okay
            <input type="radio" name="radios17" id="radios-1" value="Not Okay">Not Okay
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">c) Check PVM alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios18" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios18" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">d) Check PWX alarm LED</label>
          <div class="col-md-8">
            <input type="radio" name="radios19" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios19" id="radios-1" value="Without">Without
          </div>
        </div>
      </form>
    </div>
  </div> <!--End -->

  <div class="panel panel-default"> <!-- Start-->
    <div class="panel-heading">III. Environmental Condition <br> A. Cabinet Condition</div>
    <div class="panel-body">
      <form role="form">
        <div class="row">
          <label for="nodeName" class="col-md-4 control-label">Missing Doors:</label>
          <div class="col-md-8">
            <input type="radio" name="radios20" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios20" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="inspectedBy" class="col-md-4 control-label">Door Alignment:</label>
          <div class="col-md-8">
            <input type="radio" name="radios21" id="radios-0" value="Okay" checked="checked">Okay
            <input type="radio" name="radios21" id="radios-1" value="Not Okay">Not Okay
          </div>
        </div>
        <div class="row">
          <label for="typeOfCabinet" class="col-md-4 control-label">Check for defective door gaskets/seals:</label>
          <div class="col-md-8">
            <input type="radio" name="radios22" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios22" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check for defective/damaged locks:</label>
          <div class="col-md-8">
            <input type="radio" name="radios23" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios23" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check for traces of infestation</label>
          <div class="col-md-8">
            <input type="radio" name="radios24" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios24" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Check for any means of ingress (cable ducts, door seals, etc):</label>
          <div class="col-md-8">
            <input type="radio" name="radios25" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios25" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Is periodic cleaning maintained inside and outside?</label>
          <div class="col-md-8">
            <input type="radio" name="radios26" id="radios-0" value="Yes" checked="checked">Yes
            <input type="radio" name="radios26" id="radios-1" value="No">No
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Encroachment with other establishments/structures:</label>
          <div class="col-md-8">
            <input type="radio" name="radios27" id="radios-0" value="With" checked="checked">With
            <input type="radio" name="radios27" id="radios-1" value="Without">Without
          </div>
        </div>
        <div class="row">
          <label for="dateAndTime" class="col-md-4 control-label">Condition of iron protective cage</label>
          <div class="col-md-8">
            <input type="radio" name="radios28" id="radios-0" value="Okay" checked="checked">Okay
            <input type="radio" name="radios28" id="radios-1" value="Not Okay">Not Okay
          </div>
        </div>
      </form>
    </div>
  </div> <!--End-->
</div>

  