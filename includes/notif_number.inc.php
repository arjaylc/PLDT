<?php 
        $idNo = $_SESSION['idNo'];
        $count = 0;
        require_once('includes/database_master.inc.php');
        $database_master = new DatabaseMaster();
        $query = "SELECT *
                  FROM projects
                  WHERE submittedTo = $idNo AND status='pending';
                  ";
        $queryResult = $database_master->queryCount($query);
        $count += $queryResult;

        $query1 = "SELECT *
                  FROM reports
                  WHERE reportedTo = $idNo AND status='pending';
                  ";
        $queryResult1 = $database_master->queryCount($query1);
        $count += $queryResult1;

        if($count > 0){?>
        	<span class="badge"><?php echo $count ?></span>
        <?php }
?>
       