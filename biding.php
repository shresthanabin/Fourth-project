<?php 
require 'db.php';
session_start();
if (isset($_SESSION['logged_in'])) {
  $stmt = $pdo->prepare("SELECT * FROM user WHERE id = '$id'");
  $result = $stmt->execute('$id');
}

 ?>
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profile">User Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="profiles">
          <label>Title: </label> <label><?php echo $row['title']; ?></label><br>
          <label>Firstname: </label> <label>Title: </label><br>
          <label>Surname: </label> <label>Title: </label><br>
          <label>Email: </label> <label>Title: </label><br>
          <label>Phone: </label> <label>Title: </label><br>
          <label>Address: </label> <label>Title: </label><br>
          <label>Bank Account: </label> <label>Title: </label><br>
          <label>Bank Code: </label> <label>Title: </label>
        </div>
      </div>
     
      <div class="modal-footer">
         <input type="hidden" name="comment_id" id="comment_id" value="0" />
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>