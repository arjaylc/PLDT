<div class="btn-group">
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></button>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
        </tr>
      <?php
        }
      ?>
    </table>
  </div>
</div>