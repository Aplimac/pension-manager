<!DOCTYPE html>
<html lang="en">
   <?php require("includes/head.php"); ?>
   <body>
      <style>
         tbody tr:hover { background: lightgray; } td a { display: block; border: 1px solid black; padding: 16px; }
      </style>
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
                              <li class="breadcrumb-item active">Existing Schemes</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Existing Schemes</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <div class="row">
                  <!-- end page title end breadcrumb -->
                  <div class="col-lg-4">
                     <a href="sub-main-scheme-details.php">
                        <div class="card" >
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3 align-self-center">
                                    <div class="icon-info">
                                       <i data-feather="clipboard" class="align-self-center icon-lg icon-dual-info"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="ml-2">
                                       <h3 class="mt-0 mb-1 font-weight-semibold">Scheme Details</h3>
                                       <span class="badge badge-soft-primary mt-1 shadow-none">View</span>                                                                                                                                             
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
                  <div class="col-lg-4">
                     <a href="sub-main-3rd-party-details.php">
                        <div class="card">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3 align-self-center">
                                    <div class="icon-info">
                                       <i data-feather="clipboard" class="align-self-center icon-lg icon-dual-info"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="ml-2">
                                       <h3 class="mt-0 mb-1 font-weight-semibold">
                                          3rd Party Details
                                       </h3>
                                       <span class="badge badge-soft-primary mt-1 shadow-none">View</span>                                                                                                                                           
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
                  
                  <!--end col--> 
                  <div class="col-lg-4">
                     <a href="sub-main-scheme-rules-details.php">
                        <div class="card">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-3 align-self-center">
                                    <div class="icon-info">
                                       <i data-feather="clipboard" class="align-self-center icon-lg icon-dual-info"></i>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="ml-2">
                                       <h3 class="mt-0 mb-1 font-weight-semibold">
                                          Scheme Rules
                                       </h3>
                                       <span class="badge badge-soft-primary mt-1 shadow-none">View</span>                                                                                                                                             
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
               </div>
                  <h5 class="page-title">Select Scheme </h5>
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">
                           <table id="footable-2" class="table mb-0" data-filtering="true"  data-show-toggle="false">
                              <thead>
                                 <tr>
                                    <th data-name="id" data-breakpoints="xs" data-type="text" width="10%">Ref #</th>
                                    <th data-name="reg" data-breakpoints="xs" data-type="text" width="10%">Reg No.</th>
                                    <th data-name="firstName">Scheme Name</th>
                                    <th data-name="lastName" width="10%">Selected</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    require_once("../config/db_config.php");
                                    
                                    $sql    = "SELECT * FROM `scheme` ;";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    
                                        echo '<tr data-expanded="true"> 
                                        <td>'. $row["id"]. '</td>
                                        <td>'. $row["reg_no"] .'</td>
                                        <td>'.$row["scheme_name"] .'</td> ';
                                            
                                            //Validate to check if session is set
                                    if(isset($_SESSION["active_scheme"])){
                                        
                                    //Checking for active scheme Selected
                                         if($_SESSION["active_scheme"] == $row["scheme_name"]){
                                            echo '<td><i data-feather="check" class="align-self-center icon-lg icon-dual-info"></i></td>';
                                        }else{
                                            echo '<td> </td>';
                                        }
                                        
                                        echo '</tr>';
                                        }else{
                                        echo '<td> </td>';
                                    }
                                    }
                                    }
                                      
                                     
                                    ?>
                                 <!-- <tr data-expanded="true">
                                    <td>2</td>
                                    <td>R102</td>
                                    <td>Pensions & other Benefits Schemes</td>
                                    <td>  if($_SESSION["active_scheme"] =="Pensions and other benefits Scheme"){echo '<i data-feather="check" class="align-self-center icon-lg icon-dual-info"></i>';} ?></td>
                                    
                                    </tr> -->
                              </tbody>
                           </table>
                           <!--end table-->
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
            <?php require("includes/footer.php"); ?>
         </div>
         <!-- end page content -->
      </div>
       
       <button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="cjs-scheme-select"></button>
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
       
       
        <?php 
          
        if(isset($_SESSION['scheme_sel_success'])){
           if($_SESSION['scheme_sel_success']){
               $_SESSION['scheme_sel_success'] = false; 
                echo '<script> $("#cjs-scheme-select").trigger("click"); </script>';
           }        
        }
       
               
        ?>
       
     
   </body>
</html>