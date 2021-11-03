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
                              <li class="breadcrumb-item active"> Edit Member Details</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Edit Member Details</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <!-- end page title end breadcrumb -->
                  <div class="row">
                        <div class="col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation mt-4" method="POST" action="controllers/memb-controller/find-member.php" novalidate> 
                                                    <div class="form-row">
                                                        
                                                        <div class="col-md-4 mb-3">
                                                            <input type="text" class="form-control" name="ssn_search" id="validationCustom01" placeholder="Member SSN"  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-4 mb-3">
                                                            <button class="btn btn-gradient-primary" name="submit" type="submit">Find Member</button>
                                                           
                                                        </div><!--end col-->
                                                    
                                                    
                                                        
                                                    </div><!--end form-row-->
                                    
                                        </form> <!--end form-->

                                        
                            
                                    </div>

                            </div>
                            
                            
                        </div><!--end col-->
                    </div><!--end row-->
                <?php   
                    if(isset( $_SESSION["memb-memb-found"]))
                    {
                        if ( $_SESSION["memb-memb-found"]){
                             
                    
                     require("controllers/memb-controller/populate-edit-memb.php"); 
                            
                             $_SESSION["memb-memb-found"] = false;
                    } else{
                       echo '                       <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body"><p>No member found from last search</p></div></div></div></div>';
                    } 
                        
                    }else{
                       echo '                       <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body"><p>No member Selected. Please select member</p></div></div></div></div>';
                    }
                    
                    
                    ?>
                    
                
                 <!--end col-->
            </div>
            <!-- container -->
            <!-- footer -->
            <?php require("includes/footer.php"); ?>
         </div>
         <!-- end page content -->
      </div>
       
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light " style="visibility: hidden;" id="modal-trigger-memb-updated"> </button>
       
       
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
    if (isset($_SESSION['modal-trigger-memb-updated'])) {
           if ($_SESSION['modal-trigger-memb-updated']) {
               $_SESSION['modal-trigger-memb-updated'] = false;
               echo '<script> $("#modal-trigger-memb-updated").trigger("click"); </script>';
           }
        }
         
        ?>
      
   </body>
</html>