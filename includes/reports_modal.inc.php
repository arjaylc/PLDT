<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['reportId']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="col-sm-3 control-label">Report Title</label>
            <input type="text" value="<?php echo $row['reportTitle']?>" class="form-control" id="reportedTo" disabled>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Reported To</label>
            <input type="text" value="<?php echo $row['firstname'].' '.$row['lastname']?>" class="form-control" id="reportedTo" disabled>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Node Name</label>
            <input type="text" value="<?php echo $row['nodeName']?>" class="form-control" id="nodeName" disabled>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Cabinet Number</label>
            <input type="text" value="<?php echo $row['cabinetNo']?>" class="form-control" id="cabinetNo" disabled>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Fault Description</label>
            <textarea class="form-control" id="faultDescription" disabled><?php echo $row['faultDescription']?></textarea>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>
            <input type="text" value="<?php echo $row['status']?>" class="form-control" id="cabinetNo" disabled>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>