<!-- Register Status Modal -->
<div class="modal fade" id = "UserDeleteStatusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Delete</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>
        <?php
          if(isset($_GET['user'])){?>
            You have successfully deleted user '<?php echo $_GET['user']?>'
        <?php
          } else{?>
            Unable to delete the user from the database.
        <?php
          }
        ?>
        </p>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
        </center>
      </div>
    </div>
  </div>
</div>