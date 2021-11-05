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
                                        <li class="breadcrumb-item active">View Members</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">View Members</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                     <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
     
                                 
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>SSN</th>
                                            <th>Fisrt Name</th>
                                            <th>Second Name</th>
                                            <th>National Id</th> 
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                       <?php
                                            
                                           $_SESSION['populate-emploer-tb'] = 1; 
                                            require("includes/populate-member-list.php"); 
                                            
                                            ?>
                                        
                                         
                                        </tbody>
                                    </table>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

          
                    
            
        
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
      
        
       <!-- Required datatable js -->
         <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Responsive examples -->
         <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
         <script src="assets/pages/jquery.datatable.init.js"></script>
    </body>

 
</html>