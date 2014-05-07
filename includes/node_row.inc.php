<tr>
  <td><?php echo $row['nodeName']?></td>
  <td><?php echo $row['node_type']?></td>
  <td><?php echo $row['cabinetNo']?></td>
  <td><?php echo $row['cabinet_type']?></td>
  <td><?php echo $row['central_officeName']?></td>
  <td>
    <div class="btn-grp">
      <button type="button" class="btn btn-danger">Maintenance</button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#nodeDetailsModal"><span class="glyphicon glyphicon-list-alt"></span></button>
      <!-- Edit Modal -->
      <div class="modal fade" id="nodeDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">[NODE NAME] Details</h4>
            </div>
            <div class="modal-body">
              <div id="register-overlay" class = "form">
                <form class="form-horizontal" action = "[]]" method="POST" role="form">
                  <div class="form-group">
                    <label for="sinNo" class="col-sm-3 control-label">SinNo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="sinNo" id="sinNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="electricMeterNo" class="col-sm-3 control-label">Electric Meter Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="electricMeterNo" id="electricMeterNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nodeType" class="col-sm-3 control-label">Node Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeType" id="nodeType" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cabinetNo" class="col-sm-3 control-label">Cabinet Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cabinetNo" id="cabinetNo" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="centralOffice" class="col-sm-3 control-label">Central Office</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="centralOffice" id="centralOffice" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nodeLocation" class="col-sm-3 control-label">Node Location</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nodeLocation" id="nodeLocation" disabled>
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
      <button type="button" id = "deleteNodeButton<?php echo $row['nodeName']?>"class="btn btn-danger" data-toggle="modal" data-target="#deleteNodeModal<?php echo $row['nodeName']?>"><span class="glyphicon glyphicon-trash"></span></button>
      <?php require('includes/delete_node_modal.inc.php');?>
    </div>
  </td>
</tr>