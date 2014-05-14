<!-- Display Settings Modal -->
<div class="modal fade" id="displaySettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Settings</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Type</label>
            <div class="col-sm-3 end">
              <select class="form-control" disabled></select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#changeSettings">Edit Information</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#changePassword">Change Password</button>
      </div>
    </div>
  </div>
</div>

<!-- Change Settings Modal -->
<div class="modal fade" id="changeSettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Settings</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname">
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname">
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Type</label>
            <div class="col-sm-3 end">
              <select class="form-control"></select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#displaySettings">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#displaySettings">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="oldPass" class="col-sm-3 control-label">Old Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="oldPass">
            </div>
          </div>

          <div class="form-group">
            <label for="newPass" class="col-sm-3 control-label">New Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="newPass">
            </div>
          </div>

          <div class="form-group">
            <label for="confirmPass" class="col-sm-3 control-label">Confirm New Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="confirmPass">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#displaySettings">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#displaySettings">Save Changes</button>
      </div>
    </div>
  </div>
</div>