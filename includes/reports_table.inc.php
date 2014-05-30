<?php 
        $idNo = $_SESSION['idNo'];
        require_once('includes/database_master.inc.php');
        $database_master = new DatabaseMaster();
        $query = "SELECT r.reportId, r.reportedBy, r.reportedTo, r.reportTitle, r.cabinetNo, r.nodeName, r.faultDescription, r.status, u.firstname, u.lastname
                  FROM reports AS r
                  INNER JOIN users u ON r.reportedBy = u.idNo
                  WHERE r.reportedTo = $idNo;
                  ";
        $queryResult = $database_master->querySelect($query);

        foreach($queryResult as $row){?>

          <?php require('includes/reports_row.inc.php');?>
      <?php
        }
      ?>