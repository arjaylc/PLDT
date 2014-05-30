<tr>
  <td><?php echo $row['reportTitle']?></td>
  <td><?php echo $row['firstname']." ".$row['lastname']?></td>
  <td><?php echo $row['status']?></td>
  <td><div class="btn-grp"><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $row['reportId']?>">Details</button></div>
  </td>
  <?php
  	require('includes/reports_modal.inc.php')
  ?>
</tr>