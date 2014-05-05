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