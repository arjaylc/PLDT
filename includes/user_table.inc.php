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
                WHERE NOT idNo=".$_SESSION['idNo']."
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
        <th><button type="button" id = "deleteUserButton<?php echo $row['idNo']?>" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal<?php echo $row['idNo']?>"><span class="glyphicon glyphicon-trash"></span></button>
          <?php require('includes/delete_user_modal.inc.php'); ?>
        </th>
      </tr>
      <?php
        }
      ?>
    </table>
  </div>
</div>