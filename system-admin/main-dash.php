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
                                        <li class="breadcrumb-item active">Main Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Main Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    
                     <div class="row">
                    <div class="col-lg-3">
                            <a href="main-create-scheme.php">     <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
                                        
                                        <div class="col-3 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="plus" class="align-self-center icon-lg icon-dual-success"></i>
                                            </div> 
                                        </div>
                                        <div class="col-9 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Create a New </p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">Scheme</h3> 
                                                <span class="badge badge-soft-success mt-1 shadow-none">Add</span>                                                                                                                                             
                                            </div>
                                             </div>     
                                                  
                                    </div>  
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                                </div></a><!--end card-->
                      </div><!--end col-->

                        <div class="col-lg-3">
                            <a href="main-select-scheme.php">     <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="copy" class="align-self-center icon-lg icon-dual-danger"></i>
                                            </div> 
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Select an Existing</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">Scheme</h3>
                                                <span class="badge badge-soft-danger mt-1 shadow-none">Select</span>                                                                                                                                              
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                                </div></a><!--end card-->
                        </div><!--end col-->

                       

                        <div class="col-lg-3">
                            <a href="set-profile.php">     <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="user" class="align-self-center icon-lg icon-dual-primary"></i>
                                            </div> 
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-0 text-muted">Manage User</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">Profile</h3>
                                                <span class="badge badge-soft-primary mt-1 shadow-none">Manage</span>                                                                                                                                     
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                                </div></a><!--end card-->
                        </div><!--end col-->
                          <div class="col-lg-3">
                            <a href="main-global-settings.php">     <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="settings" class="align-self-center icon-lg icon-dual-info"></i>
                                            </div> 
                                        </div>
                                        <div class="col-sm-8 col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Global Parameter</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">Settings</h3>  
                                                <span class="badge badge-soft-info mt-1 shadow-none">Edit</span>   
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                                </div></a><!--end card-->                                    
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-8">                                                        
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0">Monthly Claims Overview</h4>                                 
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body--> 
                                <div class="card-body bg-light-alt chart-report-card">
                                    <div class="row d-flex justify-content-between">
                                       
                                            <div class="col-lg-4">
                                            <div class="media">
                                                
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="users" class="align-self-center icon-dual-2"></i>  
                                                </div>                                                                 
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">140k 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>21%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Active Members</p>
                                                </div><!--end media-body-->
                                                  
                                                
                                                
                                            </div><!--end media-->
                                            </div>
                                       <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="media">
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="eye" class="align-self-center icon-dual-2"></i>  
                                                </div>                                     
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">2154 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>6%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Contributions</p>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="media">
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="headphones" class="align-self-center icon-dual-2"></i>  
                                                </div>                                     
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">76k 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>9%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Clients</p>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div> <!--end card-body-->                              
                            </div><!--end card-->                            
                        </div><!--end col-->
                        <div class="col-lg-4">                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Penssion Funds</h4>  
                                    <div id="ana_device" class="apex-charts"></div>
                                    <div class="table-responsive mt-4">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Scheme</th>
                                                <th>Members</th>
                                                <th>Clients</th>
                                                <th>Claims</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">AP Scheme</th>
                                                <td>1843</td>
                                                <td>80</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">POB Scheme</th>
                                                <td>2543</td>
                                                <td>105</td>
                                                <td>33</td>                                                 
                                            </tr>
                                            
                                            
                                            </tbody>
                                        </table><!--end /table-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
         
                    
                   
                      
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="wrap">
                                        <div class="jctkr-label">
                                            <span><i class="fas fa-exchange-alt mr-2"></i>Employers</span>
                                        </div>
                                        <div class="js-conveyor-example">
                                            <ul>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>Aplimac: 8435.21</b></span>
                                                    <span class="mb-0 font-12 text-success">+7.88%</span>
                                                </li>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>GCF: 1233.54</b></span>
                                                    <span class="mb-0 font-12 text-success">+5.12%</span>
                                                </li>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>ABC: 8435.21</b></span>
                                                    <span class="mb-0 font-12 text-danger">-2.62%</span>
                                                </li>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>BANK X: 226.64</b></span>
                                                    <span class="mb-0 font-12 text-success">+1.91%</span>
                                                </li>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>FIRM X: 12.91</b></span>
                                                    <span class="mb-0 font-12 text-danger">-1.55%</span>
                                                </li>
                                                <li>
                                                    <img src="assets/images/coins/dollar.png" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>COMPANY Y: 0.50</b></span>
                                                    <span class="mb-0 font-12 text-danger">-0.45%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>  <!--end row--> 
          
        
                </div><!-- container -->

             
               <!-- footer -->
                <?php require("includes/footer.php"); ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


<script src="custom-files/pre_load_alert.js"></script>

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
        
        <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>
        
        
        <script src="../plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="assets/pages/jquery.crypto-news.init.js"></script>
         
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
         
        
    </body>

 
</html>