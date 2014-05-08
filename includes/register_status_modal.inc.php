<!-- Register Status Modal -->
<div class="modal fade" id = "registerSuccessModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Registration</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>
        <?php
          if(isset($_GET['new_user'])){?>
            You have successfully user '<?php echo $_GET['new_user']?>'
        <?php
          } else{?>
            Unable to add a new user to the database.
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