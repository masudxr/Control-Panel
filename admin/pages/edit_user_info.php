<?php 

  $userId=$_SESSION['user_id'];

 $result= $obj_superadmin->edit_user($userId);
 $result1=mysqli_fetch_assoc($result);

 
 if(isset($_POST['edit_User'])){
     $result3= $obj_superadmin->update_user($_POST);
 }
?>


<div class="row">
    <div class="col-md-6 mx-auto">
        <h1>Edit user Info</h1>
       
        <h2>  <?php            if (isset($result3)) echo $result3;?></h2>
        
        <form role="form" action="" method="post">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">User Name</label>
                <input type="text" name="name" value="<?php echo $result1['admin_name']; ?>" class="form-control" id="inputSuccess">
                <input type="hidden" name="uid"  value="<?php echo $userId; ?>" class="form-control" id="inputSuccess">
       
            
            </div>
             <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">User Email</label>
                <input type="text" name="email" value="<?php echo $result1['admin_email']; ?>" class="form-control" id="inputSuccess">
            </div>
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">User Pass</label>
                <input type="text" name="pass" value="<?php echo $result1['admin_pass']; ?>" readonly class="form-control" id="inputSuccess">
            </div>
            <button type="submit" name="edit_User" class="btn btn-primary">update User Info</button>
        </form>
    </div>
</div>
