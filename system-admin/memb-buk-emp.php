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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Membership</a></li>
                                        <li class="breadcrumb-item active"> Bulk Employee(s) Upload</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Bulk Employee Upload</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                           <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
       

                                    <h4 class="mt-0 header-title">New Fund Entrants Uploads</h4>
                                    <br/>
                                    <form class="needs-validation" method="POST" action="controllers/memb-controller/bulk-member-upload.php" novalidate> 
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Company</label>
                                                <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div> 
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Period</label>
                                                <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                     Make sure your input is in number format!
                                                </div>
                                            </div><!--end col-->
                                           
                                            <!--end col-->
                                        </div><!--end form-row-->
                                        
                                        <div class="form-row">
                                    
                                             <div  class="col-md-12 mb-3" >
                                                
                                                     
                                                       <!-- <p class="text-muted mb-3">Upload File</p>
                                                        <input type="file" name="member_file" id="input-file-now" class="dropify" />   -->     
                                                 
                                                 
                                                        <input type="file" name="upload_file"   />    
                                                    
                                                
                                            </div><!--end col-->
                                        
                                        </div>
                                          
                                        
                                        
                                         
                                        <button name="submit" class="btn btn-gradient-primary" type="submit">Process</button>
                                    </form> <!--end form-->                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    </div><!--end row-->
          
          
          
                    
            
        
                </div><!-- container -->

             
               <!-- footer -->
                <?php require("includes/footer.php"); ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        

 <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery-ui.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/metismenu.min.js"></script>
      <script src="assets/js/waves.js"></script>
      <script src="assets/js/feather.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="../plugins/apexcharts/apexcharts.min.js"></script>
      <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
      <script src="../plugins/footable/js/footable.js"></script>
      <script src="../plugins/moment/moment.js"></script> 
      <script src="assets/pages/jquery.footable.init.js"></script> 
      <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>
      <!-- App js -->
      <script src="assets/js/app.js"></script>
      <script src="assets/js/get_scheme.js"></script>
        
        
        <script src="../plugins/dropify/js/dropify.min.js"></script>
        <script src="assets/pages/jquery.form-upload.init.js"></script>
      <!-- file to be  --> 
        
    </body>

 
</html>