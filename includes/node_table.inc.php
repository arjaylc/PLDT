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
<<<<<<< HEAD
                  ORDER BY c.cabinetNo, n.nodeName
                  LIMIT $offset, $nodesPerPage";
=======
                  LIMIT 0, 25";
>>>>>>> 8fbc03dec422aab78b2c56e6fc61be8230e1374d
        $queryResult = $database_master->querySelect($query);
        foreach($queryResult as $row){?>
          <?php require('includes/node_row.inc.php');?>
      <?php
        }
      ?>
    </table>
  </div>
</div>