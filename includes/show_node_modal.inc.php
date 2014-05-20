<?php 
function showNodeModal($row){?>
      <div class="modal fade" id="nodeDetailsModal<?php echo $row['nodeName']?>" tabindex="-1" role="dialog" aria-labelledby="nodeDetailsLabel" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><?php echo $row['nodeName']?> Details  <button type="button" class="btn btn-danger">Maintenance </button>
                <button type="button" class="btn btn-danger">Map</button></h4>
            </div>
            <div class="modal-body">
              <div id="edit-overlay" class = "form">
                <form class="form-horizontal" role="form" action="updateNode.php" method="POST">
                <div class="form-group">
                <label for="cabinetType" class="col-sm-3 control-label">Cabinet Type</label>
                <div class="col-sm-9">
                    <select class="form-control" name="cabinetType">
                      <?php
                        require_once('includes/database_master.inc.php');
                        $database_master = new DatabaseMaster();
                        $query = "SELECT cabinet_types FROM cabinet_types";
                        $queryResult = $database_master->querySelect($query);
                        foreach($queryResult as $cabinetType){?>
                          <option><?php echo $cabinetType['cabinet_types']?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="editSinNo" class="col-sm-3 control-label">SinNo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="sinNumber" id="editSinNo" value="<?php echo $row['sinNo']?>" disabled >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editElectricMeterNo" class="col-sm-3 control-label">Electric Meter Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ElectricMeterNo" id="editElectricMeterNo" value="<?php echo $row['electricMeterNo']?>"  disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeType" class="col-sm-3 control-label">Node Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeType" id="editNodeType" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCabinetNo" class="col-sm-3 control-label">Cabinet Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cabinetNo" id="editCabinetNo" value="<?php echo $row['cabinetNo']?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCentralOffice" class="col-sm-3 control-label">Central Office</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="office" id="editCentralOffice" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeLocation" class="col-sm-3 control-label">Node Location</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeLocation" id="editNodeLocation" value="<?php echo $row['nodeLocation']?>" disabled>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-danger" disabled id="saveButton" >Save</button>
             <button type="button" onclick="enableButton()"class="btn btn-danger"  >Edit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
<?php 
}
?>