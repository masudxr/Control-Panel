<!--<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="../asset/back_end/image/download.jpg" alt=""/>
                    </div>
                   
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                     <div class="row">
                    <div class="col-xs-12">
                        <img src="../asset/back_end/image/download.jpg" alt=""/>
                    </div>
                   
                </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="row">
                    <div class="col-xs-12">
                        <img src="../asset/back_end/image/download.jpg" alt=""/>
                    </div>
                   
                </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="row">
                    <div class="col-xs-12">
                        <img src="../asset/back_end/image/download.jpg" alt=""/>
                    </div>
                   
                </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>-->

<?php 

  $userId=$_SESSION['user_id'];
   if(isset($_POST['booking'])){
     $result4= $obj_superadmin->booking_info($_POST);
 }
?>


<div class="row">
    <div class="col-md-6 mx-auto">
        
        <h1>  <?php if(isset($result4)) echo $result4;?></h1>
        <h1>Sender info</h1>
       
        
    
        
        <form role="form" action="" method="post">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Name</label>
                <input type="text" name="sname"  class="form-control" id="inputSuccess">
                <input type="hidden" name="uid"  value="<?php echo $userId; ?>" class="form-control" id="inputSuccess">
       
            </div>
              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Phone</label>
                <input type="text" name="sphone"  class="form-control" id="inputSuccess">

            </div>
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Email</label>
                <input type="text" name="semail"  class="form-control" id="inputSuccess">

            </div>
            
                <h1>Receiver info</h1>
                <hr>
                 <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Name</label>
                <input type="text" name="rname"  class="form-control" id="inputSuccess">

            </div>
              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Phone</label>
                <input type="text" name="rphone"  class="form-control" id="inputSuccess">

            </div>
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"> Email</label>
                <input type="text" name="remail"  class="form-control" id="inputSuccess">

            </div>
            <button type="submit" name="booking" class="btn btn-primary">update User Info</button>
        </form>
    </div>
</div>
