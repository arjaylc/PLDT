<div class="btn-group">
  <form>
    <?php
      require_once('includes/database_master.inc.php');
      if(isset($_GET['page'])){
        $page=$_GET['page'];
      } else{
        $page='1';
      }
      if($page!='1'){
    ?>

        <button type="button" onclick= "document.location.href = 'index.php?page=<?php echo ((int)$page)-1?>'"
        class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></button>

    <?php
      }
    ?>
    <div class="col-xs-4">
      <select class="form-control" onchange ="location = this.options[this.selectedIndex].value;">
        <?php
        $nodesPerPage=25;//nodes per page
        $query = "SELECT COUNT(nodeName) as nodeCount FROM node";
        $queryResult = $database_master->querySelect($query);
        if(is_array($queryResult) && count($queryResult)){
          $numPages = ($queryResult[0]['nodeCount']/$nodesPerPage)+1;
          for($i=1; $i<=$numPages; $i++){
            echo '<option value="index.php?page='.$i.'"';
            if($i==$page){
              echo ' selected';
            }
            echo '>'.$i.'</option>';
          }
        }
        ?>
      </select>
    </div>
    <?php
    if((int)$page!=(int)$numPages){?>
      <button type="button" class="btn btn-default" onclick= "document.location.href = 'index.php?page=<?php echo ((int)$page)+1?>'">
      <span class="glyphicon glyphicon-chevron-right"></span></button>
      <?php
    }?>
    <h2> Search for Cabinet/Node</h2>
    <form class="navbar-form navbar-right">
      <input type="text" class="form-control" placeholder="Search...">
    </form> 
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
        $offset=($page-1)*25;
        $query = "SELECT n.nodeName, n.node_type, c.cabinetNo, c.cabinet_type, n.central_officeName,n.sinNo,n.electricMeterNo,n.nodeLocation
                  FROM node AS n
                  LEFT JOIN cabinet AS c
                  ON n.cabinetNo = c.cabinetNo
                  ORDER BY c.cabinetNo, n.nodeName
                  LIMIT $offset, $nodesPerPage";
        $queryResult = $database_master->querySelect($query);
        foreach($queryResult as $row){?>
          <?php require('includes/node_row.inc.php');?>
      <?php
        }
      ?>
    </table>
  </div>
</div>