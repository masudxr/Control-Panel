<?php
$rec_id=$_GET['id'];
$result=$obj_superadmin->select_category_by_id($rec_id);

$category_info=mysqli_fetch_assoc($result);


if(isset($_POST['update_btn'])){
   $update_result= $obj_superadmin->update_category($_POST);
}
?>


<div class="row">
    <div class="col-md-6 mx-auto">
        <h1>Edit Category  page</h1>
        
        <h2 class="alert alert-success">  <?php if(isset($update_result)) echo $update_result; ?></h2>
        
        <form role="form" action="" method="post">

            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">Category Name</label>
                 <input type="hidden" name="hidden_id"   value="<?php echo $category_info['ct_id']; ?>" class="form-control" id="inputSuccess">
     
                <input type="text" name="name"  value="<?php echo $category_info['ct_name']; ?>" class="form-control" id="inputSuccess">
            </div>
           
            <div class="form-group has-error">
                <label class="control-label" for="inputError">Category Description</label>
                <textarea class="form-control" rows="3" name="ct_desc"><?php echo $category_info['ct_desc']; ?></textarea>
            </div>
            <button type="submit" name="update_btn" class="btn btn-primary">Update Category Info</button>
        </form>
    </div>
</div>
