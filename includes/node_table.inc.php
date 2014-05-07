<div class="btn-group">
  <form>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></button>
  <select style="height: 35px;">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
  </select>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></button>
</form>
</div>
<div class="table-responsive">  
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Equipment List</div>
    <!-- Table -->
    <table class="table">
      <tr>
        <th>Node Name</th>
        <th>Node Type</th>
        <th>Cabinet Number</th>
        <th>Cabinet Type</th>
        <th>Homing CO</th>
      </tr>

      <?php 
        require_once('includes/database_master.inc.php');
        $database_master = new DatabaseMaster();
        $query = "SELECT n.nodeName, n.node_type, c.cabinetNo, c.cabinet_type, n.central_officeName
                  FROM node AS n
                  LEFT JOIN cabinet AS c
                  ON n.cabinetNo = c.cabinetNo
                  LIMIT 0, 25";
        $queryResult = $database_master->querySelect($query);
        foreach($queryResult as $row){?>
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
              <!-- Delete Modal -->
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
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteNodeModal"><span class="glyphicon glyphicon-trash"></span></button>
              <!-- Delete Modal -->
              <div class="modal fade" id="deleteNodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Delete Node</h4>
                    </div>
                    <div class="modal-body">
                      <center>
                      <p>Are you sure in deleting this node?</p>
                      <button type="button" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      <?php
        }
      ?>
    </table>
  </div>
</div>