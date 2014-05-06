<br><br>
<div class="btn-group">
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></button>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
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
  <br>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">User List</div>
    <!-- Table -->
    <table class="table">
      <tr>
        <th>ID#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Action</th>
      </tr>
      <?php require_once('includes/database_master.inc.php');
      $database_master = new DatabaseMaster();
      $query = "SELECT idNo, lastName, firstName, position, central_officeName 
                FROM users 
                ORDER BY lastName, firstName
                LIMIT 0,25;";
      $queryResult = $database_master->querySelect($query);
      foreach($queryResult as $row){?>
      <tr>
        <td><?php echo $row['idNo']?></td>
        <td><?php echo $row['lastName']?></td>
        <td><?php echo $row['firstName']?></td>
        <td><?php echo $row['position']?></td>
        <td><?php echo $row['central_officeName']?></td>
        <th><button class="btn btn-danger">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </th>
      </tr>
      <?php
        }
      ?>
    </table>
  </div>
</div>