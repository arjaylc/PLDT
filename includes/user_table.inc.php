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
                  <?php 
                    require_once('includes/database_master.inc.php');
                    $database_master = new DatabaseMaster();
                    $query = "SELECT idNo, lastName, firstName, position, central_officeName FROM users LIMIT 0,25;";
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