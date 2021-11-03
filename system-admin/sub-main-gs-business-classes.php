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
                                        <li class="breadcrumb-item active"> Business Classes</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Business Classes</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation mt-4" method="POST" novalidate> 
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control" name="reg_no" id="validationCustom01" placeholder="Country Name" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div> 
                                                            <div class="invalid-feedback">
                                                                This Field is Required!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-2 mb-3">
                                                            <input type="text" class="form-control" name="reg_no" id="validationCustom01" placeholder="Industry "  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-2 mb-3">
                                                            <input type="text" class="form-control" name="reg_no" id="validationCustom01" placeholder="Class Code"  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control" name="reg_no" id="validationCustom01" placeholder="Description "  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-2 mb-3">
                                                            
                                                            <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                            
                                                        </div><!--end col-->
                                                    
                                                    
                                                        
                                                    </div><!--end form-row-->
                                    
                                        </form> <!--end form-->

                                        <!-- Table -->
                                        <table id="footable-2" class="table mb-0" data-filtering="true"  data-show-toggle="false">
                                                <thead>
                                                    <tr>
                                                        <th data-name="firstName">Country Name </th>
                                                        <th data-name="lastName">Industry</th>
                                                        <th data-name="Del">Class Code</th>
                                                        <th data-name="Del">Description </th>
                                                        <th data-name="Del">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 
                                                </tbody>
                                        </table>
                            
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