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
                              <li class="breadcrumb-item active"> Register Member</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Register Member</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <!-- end page title end breadcrumb -->
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="mt-0 header-title">Membership Form</h4>
                           <h3>Basic Details</h3>
                           <br/>
                           <form class="needs-validation" method="POST" action="controllers/memb-controller/add-member.php" novalidate>
                              <!--end form-row-->
                              <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Title</label>
                                    <select type="text" name="title" class="form-control" id="validationCustom02"   required>
                                       <option >Select</option>
                                       <option value="Mr">Mr</option>
                                       <option value="Mrs">Mrs</option>
                                       <option value="Miss">Miss</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Make sure your input is in number format!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Make sure your input is in number format!
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Marital Status</label> 
                                    <select  type="text" name="maritalstatus" class="form-control" id="validationCustom02"   required>
                                       <option  >Select Marital Status</option>
                                       <option value="Single">Single</option>
                                       <option value="Married">Married</option>
                                       <option value="Divorced">Divorced</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Gender</label>
                                    <select input type="text" name="gender" class="form-control" id="validationCustom02"   required>
                                       <option >Select</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">D.O.B</label>
                                    <input type="date" name="dob" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <!--end form-row-->
                              <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">National Identity No</label>
                                    <input type="text" name="nat_id_no" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-8 mb-3">
                                    <label for="validationCustom02">Country Of Origin:</label>
                                    <select type="text" name="countryoo" class="form-control" id="validationCustom02"   required>
                                       <option  >Select Country</option>
                                       <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <h3>Employment Details</h3>
                              <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Date of Employment</label>
                                    <input type="date" name="doe" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Current Position</label>
                                    <input type="text" name="current_position" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <h3>Contact Details</h3>
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
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Address Line 2</label>
                                    <input type="text" name="address2" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">City</label>
                                    <select type="text" name="address_city" class="form-control" id="validationCustom02"   required>
                                       <option value="Harare"> Harare</option>
                                       <option value="Marondera"> Marondera</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Country</label>
                                    <select type="text" name="address_country" class="form-control" id="validationCustom02"   required>
                                       <option value="Zimbabwe"> Zimbabwe</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Telephone Number</label>
                                    <input type="text" name="telephone" class="form-control" id="validationCustom02"   required> 
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Cell No.</label>
                                    <input type="text" name="cellno" class="form-control" id="validationCustom02"   required> 
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02"> Email Address</label>
                                    <input type="email" name="email" class="form-control" id="validationCustom02"   required>  
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col--> 
                              </div>
                              <h3>Banking Details</h3>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Bank </label>
                                    <select type="text" name="bank" class="form-control" id="validationCustom02"    required>
                                       <option selected="selected"  >Select a bank</option>
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
                                 </div>
                                 <!--end col-->  
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Branch Name </label>
                                    <select type="text" name="branchname" class="form-control" id="validationCustom02"    required>
                                       <option value="">Select Branch</option>
                                       <option value="Kwame">Kwame</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Account No.</label>
                                    <input type="text" name="accno" class="form-control" id="validationCustom02"   required>  
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Account Name</label>
                                    <input type="text" name="accname"  class="form-control" id="validationCustom02"   required> 
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                              </div>
                              <br/>
                              <button type="submit" class="btn btn-primary waves-effect waves-light"  >Register  Employee</button> 
                           </form>
                           <!--end form-->                                          
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                  <!--end col-->
               </div>
               <!--end row-->
            </div>
            <!-- container -->
            <!-- footer -->
            <button type="button" class="btn btn-gradient-primary waves-effect waves-light "  id="modal-trigger-memb-created" style="visibility: hidden;" >  </button>
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
      <!-- Sweet-Alert  -->
      <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>           
      <?php require('custom-files/sweet-alert.php'); ?>
       
      <?php
         //**********************Modal Alerts triggers
             if (isset($_SESSION['modal-trigger-memb-created'])) {
                    if ($_SESSION['modal-trigger-memb-created']) {
                        $_SESSION['modal-trigger-memb-created'] = false;
                        echo '<script> $("#modal-trigger-memb-created").trigger("click"); </script>';
                    }
                 }
                  
                 ?>
   </body>
</html>