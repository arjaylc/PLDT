<tr>
  <td><?php echo $row['projectTitle']?></td>
  <td><?php echo $row['nodeName']?></td>
  <td><?php echo $row['deadlineDate']." ".$row['deadlineTime']?></td>
  <td><?php echo $row['project_type']?></td>
  <td><?php echo $row['datetimeStarted']?></td>
  <td><?php echo $row['datetimeFinished']?></td>
  <td><div class="btn-grp"><button class="btn btn-danger" data-toggle="modal" data-target="#tasks<?php echo $row['projectId']?>">Details</button></div>
  </td>
  <?php
  	require('includes/tasks_modal.inc.php')
  ?>
</tr>