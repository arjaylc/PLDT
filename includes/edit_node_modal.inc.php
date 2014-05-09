<!-- Edit Modal -->
      <div class="modal fade" id="nodeDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">[NODE NAME] Details</h4>
            </div>
            <div class="modal-body">
              <div id="edit-overlay" class = "form">
                <form class="form-horizontal" action = "[]]" method="POST" role="form">
                  <div class="form-group">
                    <label for="editSinNo" class="col-sm-3 control-label">SinNo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editSinNo" id="editSinNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editElectricMeterNo" class="col-sm-3 control-label">Electric Meter Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editElectricMeterNo" id="editElectricMeterNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeType" class="col-sm-3 control-label">Node Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editNodeType" id="editNodeType" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCabinetNo" class="col-sm-3 control-label">Cabinet Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editCabinetNo" id="editCabinetNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editCentralOffice" class="col-sm-3 control-label">Central Office</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editCentralOffice" id="editCentralOffice" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="editNodeLocation" class="col-sm-3 control-label">Node Location</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editNodeLocation" id="editNodeLocation" disabled>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger">Edit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>