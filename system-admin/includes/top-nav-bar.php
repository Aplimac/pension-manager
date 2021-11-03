  

<div class="topbar">           
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                      <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                           
                            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-light badge-pill">3</span>
                            </h6> 
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-info">
                                           <i class="la la-check-circle text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Scheme   Updated!</h6>
                                            <small class="text-muted mb-0">You have changed the scheme settings</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-success">
                                            <i class="la la-group text-white"></i>
                                        </div>
                                         <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Clients DB Synced!</h6>
                                            <small class="text-muted mb-0">You have changed the scheme settings</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-pink">
                                            <i class="la la-list-alt text-white"></i>
                                        </div>
                                         <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">New Task Request! </h6>
                                            <small class="text-muted mb-0">You have changed the scheme settings</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                             </div>
                            <!-- All-->
                            <a onclick="alert('The Notifications functions is still in developer mode')" href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown"> 
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/profile-pictures/<?php echo $_SESSION["profile_pic"]; ?>" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"><?php echo $_SESSION["fullName"]; ?><i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="set-profile.php"  ><i class="dripicons-user text-muted mr-2"></i> Profile</a>  
                              <a class="dropdown-item" href="set-manual.php"  ><i class="dripicons-question text-muted mr-2"></i> Manual</a> 
                              <a class="dropdown-item" href="set-support.php"  ><i class="dripicons-message text-muted mr-2"></i> Support</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="controllers/logout.php"><i class="dripicons-power text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                   
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">  
                    <li>
                        <a href="index.html">
                            <span class="responsive-logo">
                                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm align-self-center" height="34">
                            </span>
                        </a>
                    </li>                      
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i data-feather="menu" class="align-self-center"></i>
                        </button>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link   waves-effect waves-light nav-user" role="button"
                            aria-haspopup="false" aria-expanded="false">                            
                            <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">
                                <?php   
                                
                               if(isset($_SESSION["active_scheme"])){
                                     
                                   echo    '<i class="mdi mdi-checkbox-marked-circle-outline"></i>'.' '.$_SESSION["active_scheme"];
                               }else{
                                 echo   '<i class="mdi mdi-close-circle-outline"></i>'.' '.'No Scheme Selected'; 
                                   
                               }
                                
                            
                               
                                
                                ?>
                                
                                
                            </span>
                        </a>
                        
                        
                        
                        <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
                                    <div class="row no-gutters">

                                        <div class="col-6 col-lg-12">

                                            <div class="p-4 text-left">                                        
                                                <div class="row" id="links">
                                                     
                                                </div>
                                            </div>                                    
                                        </div><!--end col-->
                                    </div><!--end row-->                                                       
                         </div>
                    </li>
                    
                    
                   
                 
                   
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
   