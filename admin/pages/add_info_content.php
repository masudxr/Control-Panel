<?php
if (isset($_POST['btn'])) {
    $result = $obj_superadmin->add_info($_POST);
}
?>



<div class="row">
    <div class="col-md-6 mx-auto">
        <h1>Form Validation States</h1>
        
        <h2 class="alert alert-success">  <?php if (isset($result)) echo $result; ?></h2>
        
        <form role="form" action="" method="post">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">Name</label>
                <input type="text" name="name" class="form-control" id="inputSuccess">
            </div>
            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning">number</label>
                <input type="text" name="number" class="form-control" id="inputWarning">
            </div>
            <div class="form-group has-error">
                <label class="control-label" for="inputError">address</label>
                <input type="text" name="address" class="form-control" id="inputError">
            </div>
            <button type="submit" name="btn" class="btn btn-primary">Disabled Button</button>
        </form>
    </div>
</div>
