<!-- Edit Modal -->
      <div class="modal fade" id="editNodeDetailsModal<?php echo $row['nodeName']?>" tabindex="-1" role="dialog" aria-labelledby="editNodeDetailsLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2>Edit Node</h2>
      </div>
      <div class="modal-body">
      <div id="register-overlay" class = "form">
        <form class="form-horizontal" role="form" action="updateNode.php" method="POST">
          <div class="form-group">
            <label for="nodeName" class="col-sm-2 control-label">Node Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nodeName" placeholder="Enter Node Name" name="nodeName" value="<?php echo $row['nodeName']?>">
            </div>
          </div>
          <div class="form-group">
              <?php require_once('includes/search_textfield.inc.php');?>
          </div>
          <div class="form-group">
            <label for="sinNumber" class="col-sm-2 control-label">Sin Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sinNumber" placeholder="Enter Sin Number" name="sinNumber" value="<?php echo $row['sinNo']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="ElectricMeterNo" class="col-sm-2 control-label">Electric Meter Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ElectricMeterNo" placeholder="Enter Electric Meter Number" name="ElectricMeterNo" value="<?php echo $row['electricMeterNo']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="nodeLocation" class="col-sm-2 control-label">Node Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nodeLocation" placeholder="Enter Node Location" name="nodelocation" value="<?php echo $row['nodeLocation']?>">
            </div>
          </div>
        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
        </form>
      </div>
      </div>
    </div>
  </div>
      </div>