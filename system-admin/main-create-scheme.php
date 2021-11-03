<!DOCTYPE html>
<html lang="en">

 
<?php require("includes/head.php"); ?>

    <body>
      


        <!-- End of added codes -->
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
                                        <li class="breadcrumb-item active">Create Scheme</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Create Scheme</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <!-- <div class="spinner-border text-primary" role="status"></div>-->
      
                    
                    <div class="row">
                            <div class="col-lg-12">
                            <div class="card ">
                                <div class="card-body">
       

                                    <h4 class="mt-0 header-title">Scheme Details Form </h4>
                                    <br/>
                                    <form class="needs-validation" method="POST" action="./controllers/create_scheme.php" novalidate> 
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Reg No.</label>
                                                <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div> 
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Tax Number</label>
                                                <input type="text" class="form-control" name="tax_no" id="validationCustom02"   required>
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
                                         <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">Scheme Name</label>
                                                <input type="text" name="scheme_name" class="form-control" id="validationCustom02"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-row-->
                                         <div class="form-row">
                                             <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Scheme Type</label>
                                                    <input type="text" name="scheme_type" class="form-control" id="validationCustom02"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                              <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Reassurence Number</label>
                                                    <input type="number" name="reassuarance_no" class="form-control" id="validationCustom02"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                       Make sure your input is in number format!
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-row-->
                                        
                                        <div class="form-row">
                                             <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Commencement Date</label>
                                                    <input type="text"  name="commencement_date"  class="form-control" placeholder="2017-06-04" id="mdate"> 
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Conversion Date</label>
                                                    <input type="text"  name="conversion_date"  class="form-control" placeholder="2017-06-04" id="mdate2">  
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Rules Amendment Date</label>
                                                    <input type="text"  name="rules_amendment_date"  class="form-control" placeholder="2017-06-04" id="mdate3"> 
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                        
                                        
                                        <div class="form-row">
                                              <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Presevation Fund</label>
                                                    <input type="text" name="presevation_fund" class="form-control" id="validationCustom02" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                              <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Scheme Default Currency</label>
                                                   <select type="text" name="scheme_default_currency" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required> 
                                                      <option value="ZWL">Currency: ZWL</option>
                                                      <option value="USD">Currency: USD</option>
                                                  </select>
                                                     <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                        <div class="form-row">
                                             <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Adress Line 1</label>
                                                    <input type="text" name="address1" class="form-control" id="validationCustom02"  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                        </div>
                                        
                                        <div class="form-row">
                                             <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Adress Line 2</label>
                                                    <input type="text" name="address2" class="form-control" id="validationCustom02"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                        </div>
                                        
                                        <div class="form-row">
                                             <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Country</label>
                                                   <select type="text" name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                             <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">City</label>
                                                    <input type="text" name="city" class="form-control" id="validationCustom02" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                        
                                        <div class="form-row">
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <button class="btn btn-gradient-primary" type="submit">Submit form</button>
                                    </form> <!--end form-->                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    </div><!--end row-->
                   
              <!-- Code for successfully scheme -->
                                        <!-- Added codes -->
        <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="scheme-created"> </button>

        
                </div><!-- container -->
                
             
               <!-- footer -->
                <?php require("includes/footer.php"); ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        
    




        <!-- jQuery  -->
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
        
        
        <!-- Parsley js -->
        <script src="../plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/jquery.validation.init.js"></script>
        
        <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>        
        <script src="assets/js/jquery.core.js"></script> 

        <!-- Sweet-Alert  -->
        <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>          
       <?php require('custom-files/sweet-alert.php'); ?>
        
          <!-- Plugins js -->
        <script src="../plugins/moment/moment.js"></script>

        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <script src="../plugins/select2/select2.min.js"></script>
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        
         <script src="assets/pages/jquery.forms-advanced.js"></script>
        
        <script src="../plugins/dropify/js/dropify.min.js"></script>
        
          <script>
            $('.dropify').dropify();
        </script>
        

        <?php
       if (isset($_SESSION['scheme-created'])) {
           if ($_SESSION['scheme-created']) {
               $_SESSION['scheme-created'] = false;
               echo '<script> $("#scheme-created").trigger("click"); </script>';
           }
       }
        ?>
        
        
    </body>

 
</html>