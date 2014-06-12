<!-- Delete Modal -->
<div class="modal fade" id = "deleteNodeModal<?php echo $row['nodeName']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Node</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>Are you sure in deleting this node?</p>
        <button type="button" onclick= "document.location.href = 'delete_node.php?node=<?php echo $row['nodeName']?>'"
          class="btn btn-danger">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </center>
      </div>
    </div>
  </div>
</div>