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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Global Settings</a></li>
                                        <li class="breadcrumb-item active"> K.Y.C Document Types</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">K.Y.C Document Types</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form class="needs-validation" novalidate> 
                                          
                                          <div class="form-row">
                                              <div class="col-md-4 mb-3">
                                                  <label for="validationCustom01">Document Type </label>
                                                  <input type="text" name="scheme_default_currency" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required /> 
                                                      
                                                  <div class="valid-feedback">
                                                      Looks good!
                                                  </div> 
                                                  <div class="invalid-feedback">
                                                      This Field is Required!
                                                  </div>
                                              </div><!--end col-->
                                              <div class="col-md-4 mb-3">
                                                  <label for="validationCustom01">Receipt Number </label>
                                                  <select type="text" name="scheme_default_currency" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required> 
                                                      <option value="ZWL">Upload in Membership</option>
                                                      <option value="ZWL"> Upload in Claims Processing</option> 
                                                      <option value="ZWL"> Upload in Payouts</option>                                                     
                                                  </select>
                                                  <div class="valid-feedback">
                                                      Looks good!
                                                  </div> 
                                                  <div class="invalid-feedback">
                                                      This Field is Required!
                                                  </div>
                                              </div><!--end col-->
                                          </div><!--end form-row-->
                                          <div class="form-row">
                                            <button class="btn btn-gradient-primary" >Save Type</button>
                                          </div>
                                </form> <!--end form-->
                                </div>
                            </div>
                            
                            
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
      <!-- file to be  -->
   
    </body>

 
</html>