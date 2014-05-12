<!-- Edit Modal -->

      <div class="modal fade" id="editNodeDetailsModal<?php echo $row['nodeName']?>" tabindex="-1" role="dialog" aria-labelledby="editNodeDetailsModal<?php echo $row['nodeName']?>" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel2"><?php echo $row['nodeName']?> Details  <button type="button" class="btn btn-danger">Maintenance </button>
                <button type="button" class="btn btn-danger">Map</button></h4>
            </div>
            <div class="modal-body">
              <div id="edit-overlay2" class = "form">
                <form class="form-horizontal" action = "[]]" method="POST" role="form">
                  <div class="form-group">
                    <label for="editSinNo2" class="col-sm-3 control-label">SinNo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editSinNo2" id="editSinNo2" value="<?php echo $row['sinNo']?>" disabled >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editElectricMeterNo2" class="col-sm-3 control-label">Electric Meter Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editElectricMeterNo2" id="editElectricMeterNo2" value="<?php echo $row['electricMeterNo']?>"  disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeType2" class="col-sm-3 control-label">Node Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editNodeType2" id="editNodeType2" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCabinetNo2" class="col-sm-3 control-label">Cabinet Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editCabinetNo2" id="editCabinetNo2" value="<?php echo $row['cabinetNo']?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCentralOffice2" class="col-sm-3 control-label">Central Office</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editCentralOffice2" id="editCentralOffice2" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeLocation2" class="col-sm-3 control-label">Node Location</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editNodeLocation2" id="editNodeLocation2" value="<?php echo $row['nodeLocation']?>" disabled>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a data-dismiss="modal" data-toggle="modal" href="#editNodeDetailsModal<?php echo $row['nodeName']?>" ><button type="button" class="btn btn-danger"  >Edit</button></a>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>