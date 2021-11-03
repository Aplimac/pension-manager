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
                                        <li class="breadcrumb-item active">Third Party Details</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Third Party Details</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                                       <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
       

                                      <br/>
                                    <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate> 
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Scheme</label>
                                                <input type="text"  readonly class="form-control" name="reg_no" id="validationCustom01"   required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div> 
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Third Party Type</label>
                                                <input type="number"  readonly class="form-control" name="tax_no" id="validationCustom02"   required>
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
                                                <label for="validationCustom02">Third Party Name</label>
                                                <input type="text"  readonly name="scheme_name" class="form-control" id="validationCustom02"   required>
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
                                                    <label for="validationCustom02">Fund Appointment Date:</label>
                                                    <input readonly  type="text" name="scheme_type" class="form-control" id="validationCustom02"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                              <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Address Line 1</label>
                                                    <input  readonly type="number" name="reassuarance_no" class="form-control" id="validationCustom02"   required>
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
                                                    <label for="validationCustom02">Address Line 2</label>
                                                    <input  readonly type="text"  name="commencement_date"  class="form-control" placeholder="2017-06-04" id="mdate"> 
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">City</label>
                                                    <input  readonly type="text"  name="conversion_date"  class="form-control" placeholder="2017-06-04" id="mdate2">  
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Manager's Name:</label>
                                                    <input readonly  type="text"  name="rules_amendment_date"  class="form-control" placeholder="2017-06-04" id="mdate3"> 
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
                                                    <label for="validationCustom02">Telephone Number</label>
                                                    <input  readonly type="text" name="presevation_fund" class="form-control" id="validationCustom02" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                              <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Fax Number</label>
                                                   <select type="text" readonly  name="scheme_default_currency" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required> 
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
                                                    <label for="validationCustom02">Email Address</label>
                                                    <input type="text"  readonly name="address1" class="form-control" id="validationCustom02"  required>
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
                                                    <label for="validationCustom02">Consultant's Name</label>
                                                    <input type="text" readonly  name="address2" class="form-control" id="validationCustom02"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                        </div>
                                        
                                        <div class="form-row">
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Telephone Number</label>
                                                   <select type="text" readonly name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Fax Number</label>
                                                    <input type="text" readonly name="city" class="form-control" id="validationCustom02" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Email Address</label>
                                                   <select type="text" readonly name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Administrator's Name:</label>
                                                   <select type="text" readonly name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                        
                                        <div class="form-row">
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Telephone Number</label>
                                                   <select type="text" readonly name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Fax Number</label>
                                                    <input type="text" readonly name="city" class="form-control" id="validationCustom02" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                             <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Email Address</label>
                                                   <select type="text" readonly name="country" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                      <option value="Zimbabwe">Country: Zimbabwe</option> 
                                                      <option value="South Africa">Country: South Africa</option> 
                                                  </select>  <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                <div class="invalid-feedback">
                                                    This Field is Required!
                                                </div>
                                            </div><!--end col-->
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <button class="btn btn-gradient-primary" type="submit">Update Details</button>
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
      <!-- file to be  -->
      <script>
         //create method form to send post to server
         $("table tbody tr").click(function(){
             
             var row = $(this).find('td:nth-child(3)').text();
             var form = document.createElement("form");
             document.body.appendChild(form);
             form.method = "POST";
             form.action = "controllers/select_scheme.php";
             var element1 = document.createElement("input");         
                 element1.name="scheme_name"
                 element1.value = row;
                 element1.type = 'text';
                 form.appendChild(element1);
             form.submit();
         
             
             });
         
            
             
      </script>
        
    </body>

 
</html>