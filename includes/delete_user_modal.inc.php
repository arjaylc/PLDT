<!-- Modal -->
<div class="modal fade" id="deleteUserModal<?php echo $row['idNo']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
      </div>
      <div class="modal-body">
        <center>
          <p>Are you sure in deleting this user?</p>
          <button type="button" onclick= "document.location.href = 'delete_user.php?idNo=<?php echo $row['idNo']?>'"
          class="btn btn-danger">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </center>
      </div>
    </div>
  </div>
</div>