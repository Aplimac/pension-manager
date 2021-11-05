<!DOCTYPE html>
<html lang="en">

 
<?php require("includes/head.php"); ?>

    <body>
        <!-- leftbar-tab-menu -->
        
        <?php require("includes/left-nav-bar.php"); ?>
       <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <?php require("includes/top-nav-bar.php"); ?>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <form method="post" enctype="multipart/form-data" >
                                                        <!-- image upload  linked to customCSS-->
                                                     <input style="display: none;" type="file" class="image" name="profpic" id="upload_prof_pic">
                                                    </form>
                            
                                                    <div class="met-profile-main-pic">
                                                        
                                                        <img src="assets/images/profile-pictures/<?php echo $_SESSION["profile_pic"]; ?>" alt="" class="rounded-circle">
                                                        <a onclick='$("#upload_prof_pic").trigger("click");' id="set-pro-fileupload"><span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"> </i>
                                                           
                                                            
                                                        </span></a>
                                                      
                                                        
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name"><?php echo $_SESSION["fullName"]; ?></h5>                                                        
                                                        <p class="mb-0 met-user-name-post"><?php echo  $_SESSION["user_role"]; ?></p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> Phone </b>: <?php echo $_SESSION["user_phone"]; ?> </li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b>: <?php echo $_SESSION["user_email"]; ?></li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>User Role</b>: <?php echo $_SESSION["user_role"]; ?></li>
                                                </ul>
                                                <div class="button-list btn-social-icon">   <br/>        
                                                    <a href="set-manual.php"><i class="dripicons-question text-muted mr-2"></i> </a> 
                                                    <a href="set-support.php"><i class="dripicons-message text-muted mr-2"></i> </a>
                                                    <a href="controllers/logout.php"><i class="dripicons-power text-muted mr-2"></i> </a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                                
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="mt-0 mb-3 header-title">  Change Personal Details</h4>
                                    <form method="post" action="controllers/user-settings/update-pers-details.php">
                                        <div class="form-group">
                                            <label for="setFullName">First Name</label>
                                            <input required type="text" name="first_name" value="<?php  echo $_SESSION["first_name"] ?>" class="form-control" id="first_name" placeholder="<?php  echo $_SESSION["first_name"] ?> ">
                                        </div><!--end form-group-->  
                                        <div class="form-group">
                                            <label for="setFullName">Last Name</label>
                                            <input required type="text" name="last_name" value="<?php  echo $_SESSION["last_name"] ?>" class="form-control" id="last_name" placeholder="<?php  echo $_SESSION["last_name"] ?> ">
                                        </div><!--end form-group-->                                        
                                        <div class="form-group">
                                           
                                        </div><!--end form-group-->                                   
                                        <div class="form-group">
                                            <label for="setEmail">Phone Number</label>
                                            <input required type="text" value="<?php  echo $_SESSION["user_phone"] ?>" name="user_phone" class="form-control" id="user_phone" placeholder="<?php echo  $_SESSION["user_phone"] ?>">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="setPassword">Email</label>
                                            <input required readonly type="email" value="<?php echo $_SESSION["user_email"]; ?>" name="user_email" class="form-control" id="user_email" placeholder="<?php echo $_SESSION["user_email"]; ?>">
                                        </div><!--end form-group-->
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Changes</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">Change Password</h4>
                                    <form method="post"  action="controllers/user-settings/change-pass.php">
                                          <div class="form-group">
                                            <label for="setChangePassword">Current Password</label>
                                            <input name="current_pass" required type="password" class="form-control" id="setChangePassword"  >
                                        </div> <!--end form-group-->   
                                          <div class="form-group">
                                            <label for="setChangePassword">New Password</label>
                                            <input name="new_pass" required type="password" class="form-control" id="setChangePassword"  >
                                        </div> <!--end form-group-->   
                                        <div class="form-group">
                                            <label for="setChangePassword">Confirm Password</label>
                                            <input name="confirm_pass" required type="password" class="form-control" id="setChangePassword"  >
                                        </div> <!--end form-group-->                                                   
                                        <button type="submit" class="btn btn-secondary btn-sm">Change Password</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">Notification Settings</h4>
                                    <div class="text-center">
                                        <img src="assets/images/widgets/notify.svg" alt="" class="mb-3" height="115">
                                    </div>
                                    <form>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="ICOnotify" checked>
                                            <label class="custom-control-label" for="ICOnotify">Get notifications</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notyfySound">
                                            <label class="custom-control-label" for="notyfySound">Notification with sound</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notifyF_friends">
                                            <label class="custom-control-label" for="notifyF_friends">Get notification on email</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="autoLockWallet" checked>
                                            <label class="custom-control-label" for="autoLockWallet">Allow read all</label>
                                        </div>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <!-- ****************Modal for cropping the profile picture  *********** -->
                    <!-- Modal -->
                    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="" class="img-fluid" id="sample_img" alt="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>

                    <!-- ************** End of modal ********************* -->
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cropModal">
                        Launch demo modal
                        </button>
        
                </div><!-- container -->
 
             
               <!-- footer -->
                <?php require("includes/footer.php"); ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="mod-alt-basic-info-updated"> </button>
        
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="mod-alt-passchange"> </button>
    
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="Invalid_password_nomatch"> </button>
        
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="Invalid_password_wrongpass"> </button>
        
        

 <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery-ui.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/metismenu.min.js"></script>
      <script src="assets/js/waves.js"></script>
      <script src="assets/js/feather.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
      <script src="../plugins/footable/js/footable.js"></script>
      <script src="../plugins/moment/moment.js"></script> 
      <!-- App js -->
      <script src="assets/js/app.js"></script>
      <script src="../plugins/cropper/js/cropper.js"></script>
      <!-- file to be  -->
        
         <!-- Sweet-Alert  -->
        <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>           
       <?php require('custom-files/sweet-alert.php'); ?>
        
                     

         
        <?php
//**********************Modal Alerts triggers
    if (isset($_SESSION['mod-alt-basic-info-updated'])) {
           if ($_SESSION['mod-alt-basic-info-updated']) {
               $_SESSION['mod-alt-basic-info-updated'] = false;
               echo '<script> $("#mod-alt-basic-info-updated").trigger("click"); </script>';
           }
        }
        
        if (isset($_SESSION['mod-alt-basic-info-passchange'])){
           
            if ($_SESSION['mod-alt-basic-info-passchange']) {
               $_SESSION['mod-alt-basic-info-passchange'] = false;
               echo '<script> $("#mod-alt-passchange").trigger("click"); </script>';
           }
       }
        
        if (isset($_SESSION['Invalid_password_nomatch'])){
           
           if ($_SESSION['Invalid_password_nomatch']) {
                $_SESSION['Invalid_password_nomatch'] = false;
               echo '<script> $("#Invalid_password_nomatch").trigger("click"); </script>';
           }
       }
        
        if (isset($_SESSION['Invalid_password_wrongpass'])){
           
           if ($_SESSION['Invalid_password_wrongpass']) {
                $_SESSION['Invalid_password_wrongpass'] = false;
               echo '<script> $("#Invalid_password_wrongpass").trigger("click"); </script>';
           }
       }
        ?>
        <script>
            $(document).ready(()=>{ 
                var _modal = $('#cropModal');
                var sample_img = document.getElementById('sample_img');
                var cropper; // initialising cropper

                //when form profpic changes
                $('#upload_prof_pic').change((event)=>{
                    var files = event.target.files;
                    //function after targeting files return done object
                    var done = (url)=>{
                        sample_img.src = url;
                        _modal.modal('show');
                    };

                    if(files && files.length > 0){
                        reader = new FileReader();
                        reader.onload = function(event)
                        {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });

                _modal.on('shown.bs.modal', function() {
                    cropper = new Cropper(sample_img, {
                        aspectRatio: 1,
                        viewMode: 3
                    });
                })

            });
        </script>
            
                
        
    </body>

 
</html>