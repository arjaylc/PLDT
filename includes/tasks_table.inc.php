<?php 
        $idNo = $_SESSION['idNo'];
        require_once('includes/database_master.inc.php');
        $database_master = new DatabaseMaster();
        $query = "SELECT *
                  FROM projects
                  WHERE submittedTo = $idNo;
                  ";
        $queryResult = $database_master->querySelect($query);

        foreach($queryResult as $row){?>
          <?php require('includes/tasks_row.inc.php');?>
      <?php
        }
      ?>