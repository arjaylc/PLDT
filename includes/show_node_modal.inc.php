<?php 
function showNodeModal($row){?>
      <div class="modal fade" id="nodeDetailsModal<?php echo $row['nodeName']?>" tabindex="-1" role="dialog" aria-labelledby="nodeDetailsLabel" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Node Details  <button type="button" class="btn btn-danger">Maintenance </button>
                <button type="button" class="btn btn-danger">Map</button></h4>
            </div>
            <div class="modal-body">
              <div id="edit-overlay" class = "form">
                <form class="form-horizontal" role="form" action="updateNode.php" method="POST">
                <div class="form-group">
                    <label for="editNodeName<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Node Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeName" id="editNodeName<?php echo $row['nodeName']?>" value="<?php echo $row['nodeName']?>" disabled >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editSinNo<?php echo $row['nodeName']?>" class="col-sm-3 control-label">SinNo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="sinNumber" id="editSinNo<?php echo $row['nodeName']?>" value="<?php echo $row['sinNo']?>" disabled >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editElectricMeterNo<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Electric Meter Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ElectricMeterNo" id="editElectricMeterNo<?php echo $row['nodeName']?>" value="<?php echo $row['electricMeterNo']?>"  disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeType<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Node Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeType" id="editNodeType<?php echo $row['nodeName']?>" value = "<?php echo $row['node_type']?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCabinetNo<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Cabinet Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cabinetNo" id="editCabinetNo<?php echo $row['nodeName']?>" value="<?php echo $row['cabinetNo']?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCentralOffice<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Central Office</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="office" id="editCentralOffice<?php echo $row['nodeName']?>" value="<?php echo $row['central_officeName']?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeLocation<?php echo $row['nodeName']?>" class="col-sm-3 control-label">Node Location</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeLocation" id="editNodeLocation<?php echo $row['nodeName']?>" value="<?php echo $row['nodeLocation']?>" disabled>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-danger" disabled id="saveButton<?php echo $row['nodeName']?>" >Save</button>
             <button type="button" onclick="enableButton('<?php echo $row["nodeName"]?>')"class="btn btn-danger"  >Edit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
<?php 
}
?>