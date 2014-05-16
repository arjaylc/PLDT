<!-- AddNodeModal -->
<div class="modal fade" id="reportsModal" tabindex="-1" role="dialog" aria-labelledby="reportsModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2>Report Details</h2>
      </div>
      <div class="modal-body">
        <div id="register-overlay" class = "form">
          <form class="form-horizontal" role="form" method="POST">
            <div class="form-group">
              <label class="col-sm-3 control-label">Report Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="reportTitle" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Reported By</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="reportedBy" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Reported To</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="reportedTo" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Node Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nodeName" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Cabinet Number</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="cabinetNumber" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Fault Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="nodeName" disabled></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Status</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="status" disabled>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!-- end AddNodeModal -->
