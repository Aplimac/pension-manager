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
                              <li class="breadcrumb-item active">Dependants</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Dependants</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <!-- end page title end breadcrumb -->
               <div class="row">
                 <!--end col-->
                  <!-- end page title end breadcrumb -->
                  <div class="col-lg-3">
                     <a href="controllers/memb-controller/pop-dep-add.php">
                        <div class="card" >
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-2 align-self-center">
                                    <div class="icon-info">
                                       <i data-feather="plus" class="align-self-center icon-lg icon-dual-info"></i>
                                    </div>
                                 </div>
                                 <div class="col-10 align-self-center text-right">
                                    <div class="ml-2">
                                       <h4 class="mt-0 mb-1 font-weight-semibold">Add<br/> Dependant</h4>
                                       <span class="badge badge-soft-primary mt-1 shadow-none">Add</span>                                                                                                                                             
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end card-body-->
                        </div>
                     </a>
                     <!--end card-->
                  </div>
                  <div class="col-lg-3">
                     <a href="controllers/memb-controller/pop-dep-view.php">
                        <div class="card" >
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-2 align-self-center">
                                    <div class="icon-info">
                                       <i data-feather="eye" class="align-self-center icon-lg icon-dual-info"></i>
                                    </div>
                                 </div>
                                 <div class="col-10 align-self-center text-right">
                                    <div class="ml-2">
                                       <h4 class="mt-0 mb-1 font-weight-semibold">View <br/> Dependants</h4>
                                       <span class="badge badge-soft-primary mt-1 shadow-none">view</span>                                                                                                                                             
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end card-body-->
                        </div>
                     </a>
                     <!--end card-->
                  </div>
                  <!--end col--> 
                       <div class="col-lg-6">
                     <div class="card">
                        <div class="card-body">
                           <form class="needs-validation mt-4" method="POST" action="controllers/memb-controller/pop-dep-edit.php"  >
                              <div class="form-row">
                                 <div class="col-md-8 mb-2">
                                    <input required type="text" class="form-control" name="dep_ssn_no" id="validationCustom01" placeholder="Dependant SSN No..."   >
                                     
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-2">
                                    <button class="btn btn-gradient-primary" name="submit" type="submit">Edit Dependant</button>
                                 </div>
                                 <!--end col-->
                              </div>
                              <!--end form-row-->
                           </form>
                           <!--end form-->
                        </div>
                     </div>
                  </div>
               
               </div>
                
                
                
                <?php  
                //Conditional statements to trigger required form after user interacts with any of the tiles (eidt, add or view dependant)
                
                //trigger for add dependant
                    if (isset($_SESSION['dependants-pop-add'])){
                        if($_SESSION['dependants-pop-add']){
                            $_SESSION['dependants-pop-add'] = 0;
                                require('includes/memb-pop-add-dep.php');
                            
                        }                        
                    }
                //trigger for view dependant 
                    if (isset($_SESSION['dependants-pop-view'])){
                        if($_SESSION['dependants-pop-view']){
                            $_SESSION['dependants-pop-view'] = 0;
                                require('includes/memb-pop-view-dep.php');
                            
                        }                        
                    }
                //trigger for edit dependant
                    if (isset($_SESSION['dependants-pop-edit'])){
                        if($_SESSION['dependants-pop-edit']){
                            $_SESSION['dependants-pop-edit'] = 0;
                                require('includes/memb-pop-edit-dep.php');
                            
                        }                        
                    }
                
                ?>
                
                
                 
               <!--end row-->
            </div>
            <!-- container -->
            <!-- footer -->
            <?php require("includes/footer.php"); ?>
         </div>
         <!-- end page content -->
      </div>
               <button type="button" class="btn btn-gradient-primary waves-effect waves-light "  id="modal-trigger-dependant-created" style="visibility: hidden;" >  </button>
       
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
       
       <!--Select-->
        <script src="../plugins/select2/select2.min.js"></script>
              
       <!-- Required datatable js -->
         <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Responsive examples -->
         <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
         <script src="assets/pages/jquery.datatable.init.js"></script>
       

        <script src="assets/pages/jquery.forms-advanced.js"></script>
         <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>    
       
       
      <?php require('custom-files/sweet-alert.php'); ?>
       
      <?php
         //**********************Modal Alerts triggers
             if (isset($_SESSION['modal-trigger-dependant-created'])) {
                    if ($_SESSION['modal-trigger-dependant-created']) {
                        $_SESSION['modal-trigger-dependant-created'] = false;
                        echo '<script> $("#modal-trigger-dependant-created").trigger("click"); </script>';
                    }
                 }
                  
                 ?>
       
       
       
      <!-- file to be  -->
   </body>
</html>











