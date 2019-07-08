<?php
if (isset($_POST['btn'])) {
    $result = $obj_superadmin->save_category($_POST);
}
?>



<div class="row">
    <div class="col-md-6 mx-auto">
        <h1>Category Add page</h1>
        
        <h2 class="alert alert-success">  <?php if (isset($result)) echo $result; ?></h2>
        
        <form role="form" action="" method="post">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">Category Name</label>
                <input type="text" name="name" class="form-control" id="inputSuccess">
            </div>
           
            <div class="form-group has-error">
                <label class="control-label" for="inputError">Category Description</label>
                <textarea class="form-control" rows="3" name="ct_desc"></textarea>
            </div>
            <button type="submit" name="btn" class="btn btn-primary">Save Category Info</button>
        </form>
    </div>
</div>
