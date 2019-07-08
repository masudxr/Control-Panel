<?php
session_start();
 require './class/SuperAdmin.php';
$obj_superadmin=new SuperAdmin();

/// login security
   $admin_id= $_SESSION['user_id'];
   if(!$admin_id){
       header('location:index.php');
   }

if(isset($_GET['status'])){
    if($_GET['status']=='logout'){
        $obj_superadmin->logout();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Panel- Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../asset/back_end/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../asset/back_end/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../asset/back_end/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../asset/back_end/vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../asset/back_end/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- DataTables CSS -->
        <link href="../asset/back_end/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../asset/back_end/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

                <?php include './incude/header_left.php'; ?>
                <!-- /.navbar-header -->

                <?php include './incude/header_right.php'; ?>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <?php include './incude/sidebar.php'; ?>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">

                <?php
                if (isset($pages)) {
                    if ($pages == "view_data") {
                        include './pages/view_info_content.php';
                    } elseif ($pages == "add") {
                        include './pages/add_info_content.php';
                    }elseif ($pages == "category") {
                        include './pages/category_content.php';
                    }elseif ($pages == "category-tbl") {
                        include './pages/category_tbl_content.php';
                    }elseif ($pages == "edit_category") {
                        include './pages/edit_category_tbl_content.php';
                    }
                    
                    
                    
                    elseif ($pages == "edit_user") {
                        include './pages/edit_user_info.php';
                    }elseif ($pages == "booking") {
                        include './pages/booking_content.php';
                    }
                    
                    
                    
                } else {
                    include './pages/home_content.php';
                }
                ?>


            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../asset/back_end/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../asset/back_end/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../asset/back_end/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../asset/back_end/vendor/raphael/raphael.min.js"></script>
        <script src="../asset/back_end/vendor/morrisjs/morris.min.js"></script>
        <script src="../asset/back_end/data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../asset/back_end/dist/js/sb-admin-2.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../asset/back_end/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../asset/back_end/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../asset/back_end/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>

</html>
