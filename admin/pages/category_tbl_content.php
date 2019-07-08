<?php
$result = $obj_superadmin->select_category();

if(isset($_GET['status'])){
    $rec_id=$_GET['id'];
    
    if($_GET['status']=="unpulished"){
      $message=  $obj_superadmin->unpublished_category($rec_id);
    }else if($_GET['status']=="pulished"){
      $message=  $obj_superadmin->published_category($rec_id);  
    }else if($_GET['status']=="delete"){
      $message=  $obj_superadmin->delete_category($rec_id);  
    }
}
?>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data From Table</h1>
        <h3 class="page-header"><?php if(isset($message)) echo $message;?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 1;
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['ct_name']; ?></td>
                                <td><?php echo $data['ct_desc']; ?></td>
                                <td>
                                    <?php if ($data['pub_status'] == 1) { ?>
                                    <a href="?status=unpulished&&id=<?php echo $data['ct_id']; ?>" class="btn btn-success" title="UnPublished"><i class="fa fa-arrow-circle-up"></i> </a>
                                    <?php } else { ?>
                                    <a href="?status=pulished&&id=<?php echo $data['ct_id']; ?>" class="btn btn-danger" title="Published">  <i class="fa fa-arrow-circle-down"></i></a>
                                    <?php } ?>
                                    <a href="edit_category.php?status=edit_ctg&&id=<?php echo $data['ct_id']; ?>" class="btn btn-primary" title="Edit Item">  <i class="fa fa-edit"></i></a>
                                    <a href="?status=delete&&id=<?php echo $data['ct_id']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


