<tr>
  <td><?php echo $row['nodeName']?></td>
  <td><?php echo $row['node_type']?></td>
  <td><?php echo $row['cabinetNo']?></td>
  <td><?php echo $row['cabinet_type']?></td>
  <td><?php echo $row['central_officeName']?></td>
  <td>
    <div class="btn-grp">
      <button type="button" class="btn btn-danger">Maintenance</button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#nodeDetailsModal">
        <span class="glyphicon glyphicon-list-alt"></span>
      </button>
      <button type="button" id = "deleteNodeButton<?php echo $row['nodeName']?>"class="btn btn-danger" data-toggle="modal" data-target="#deleteNodeModal<?php echo $row['nodeName']?>"><span class="glyphicon glyphicon-trash"></span></button>
      <?php
        require('includes/edit_node_modal.inc.php');
        require('includes/delete_node_modal.inc.php');
      ?>
    </div>
  </td>
</tr>