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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Employers</a></li>
                                        <li class="breadcrumb-item active">Register Employer</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Register Employer</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="controllers/pe-controller/register-employer.php" method="post">
                                    <h4 class="mt-0 header-title">Registration Form</h4>
                                    
                                         <h3>Basic Details</h3>
                                        <fieldset> 
                                            
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom02">Trade Name </label>
                                                        <input type="text"    name="tradename"  class="form-control" name="tax_no" id="validationCustom02"   required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Legal Name</label>
                                                            <input type="text" name="legalname" class="form-control" id="validationCustom02"   required>
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
                                                            <label for="validationCustom02">VAT Number</label>
                                                            <input type="text" name="vatnumber" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Partner Number</label>
                                                            <input type="number" name="patnumber" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                            <label for="validationCustom02">Industry</label>
                                                            <select type="text" name="industry" class="form-control" id="validationCustom02"  required> 
                                                                <option value="Clothing">  Clothing</option>
                                                                <option value="Motoring">  Motoring</option>
                                                                <option value="Capital">  Capital Marketings</option>
                                                                <option value="Banking and Finance"> Banking and Finance</option> 
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
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Registration Date</label>
                                                            <input type="date"  name="regdate"  class="form-control"   id="mdate_pe_tl_reg">  
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Trade Commencement Date</label>
                                                            <input type="date"  name="tradecomdate"  class="form-control"  id="mdate_pe_tl_com"> 
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
                                                            <label for="validationCustom02">Holding Company</label>
                                                        <select type="text" name="holdingcomp" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required> 
                                                            <option value="SELF">SELF</option>
                                                        </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Company Size</label>
                                                            <input type="number" name="companysize" class="form-control" id="validationCustom02" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Telephone   </label>
                                                            <input type="text" name="telephone" class="form-control" id="validationCustom02" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Cell Number   </label>
                                                            <input type="text" name="cellnumber" class="form-control" id="validationCustom02" required>
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
                                                            <label for="validationCustom02">Address Line 1</label>
                                                            <input type="text" name="address1" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Address Line 2</label>
                                                            <input type="text" name="address2" class="form-control" id="validationCustom02"  required>
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
                                                            <label for="validationCustom02">City</label>
                                                             <select type="text" name="city" class="form-control" id="validationCustom02"   required> 
                                                            <option value="Harare"> Harare</option> 
                                                            <option value="Marondera"> Marondera</option> 
                                                        </select> 
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Country</label>
                                                        <select type="text" name="country" class="form-control" id="validationCustom02"   required> 
                                                            <option value="Zimbabwe"> Zimbabwe</option>  
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
                                                </div>                                    
                                            
                                        </fieldset> <!-- End of field set -->
            <!-- Directors section --> 
                                        <!-- Banking details -->
                                        <h3>Banking Details</h3>
                                        <fieldset> 
                                            
                                                <div class="form-row">                                           
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Account Name</label>
                                                        <input type="text" class="form-control" name="accname" id="validationCustom02"   required>                                                      
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Account Number</label>
                                                        <input type="text" class="form-control" name="accno" id="validationCustom02"   required>                                                      
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Bank </label>
                                                        <select type="text" name="bank" class="form-control" id="validationCustom02"    required> 
                                                            <option selected="selected" value="">Select a bank</option>
                                                            <option value="FIRST CAPITAL">FIRST CAPITAL</option>
                                                            <option value="BEVERLEY">BEVERLEY</option>
                                                            <option value="CABS">CABS</option>
                                                            <option value="FNBS">FNBS</option>
                                                            <option value="FOUNDERS">FOUNDERS</option>
                                                            
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
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom02">Branch Name</label>
                                                        <select type="text" name="branchname" class="form-control" id="validationCustom02"    required>
                                                            <option value="">Select Branch</option> 
                                                            <option value="Kwame">Kwame</option> 
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <!--end col-->
                                                </div><!--end form-row-->

                                        </fieldset>

                                        <!-- Employees upload -->
                                        
                                        <h3>Uploads</h3>
                                        <fieldset> 
                                                <div class="form-row">
                                                 
                                                    <div class="col-md-4 mb-3">
                                                          <label for="validationCustom01">Upload Company Reg Docs </label> 
                                                        <input type="file" id="input-file-now" class="dropify" />                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end form-row-->

                                        </fieldset>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> 
                                    
                                    </form>
 
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

                
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="modal-trigger-emp-created"> </button>

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
      <!--|JS for wizard form  -->
      <script src="../plugins/jquery-steps/jquery.steps.min.js"></script>
      <script src="assets/pages/jquery.form-wizard.init.js"></script>


      <!-- App js -->
      <script src="assets/js/app.js"></script>
        
         <!-- Sweet-Alert  -->
        <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>           
       <?php require('custom-files/sweet-alert.php'); ?>
        
        
        <script src="../plugins/dropify/js/dropify.min.js"></script>
        <?php
//**********************Modal Alerts triggers
    if (isset($_SESSION['modal-trigger-emp-created'])) {
           if ($_SESSION['modal-trigger-emp-created']) {
               $_SESSION['modal-trigger-emp-created'] = false;
               echo '<script> $("#modal-trigger-emp-created").trigger("click"); </script>';
           }
        }
         
        ?>
        
        
      <!-- file to be  -->
      
        
    </body>

 
</html>