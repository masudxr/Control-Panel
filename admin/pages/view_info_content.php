<?php
$result = $obj_superadmin->select_info();
?>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data From Table</h1>
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
                            <th>Sender Name</th>
                            <th>SEnder Email</th>
                            <th>sender phone</th>
                            <th>rec Name</th>
                            <th>rec Email</th>
                            <th>rec phone</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $data['sname']; ?></td>
                                <td><?php echo $data['sphone']; ?></td>
                                <td><?php echo $data['semail']; ?></td>
                                <td><?php echo $data['rname']; ?></td>
                                <td><?php echo $data['rphone']; ?></td>
                                <td><?php echo $data['remail']; ?></td>
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


