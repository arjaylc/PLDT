<tr>
  <td><?php echo $row['projectTitle']?></td>
  <td><?php echo $row['nodeName']?></td>
  <td><?php echo $row['deadlineDate']?></td>
  <td><?php echo $row['project_type']?></td>
  <td><?php echo $row['datetimeStarted']?></td>
  <td><?php echo $row['datetimeFinished']?></td>
  <td><div class="btn-grp"><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $row['reportId']?>">Details</button></div>
  </td>
  <?php
  	//require('includes/reports_modal.inc.php')
  ?>
</tr>