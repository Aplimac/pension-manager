<div  class="leftbar-tab-menu">
   <div class="main-icon-menu slimscroll-menu">
      <a href="index.html" class="logo logo-metrica d-block text-center">
      <span>
      <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
      </span>
      </a>
      <nav class="nav">
         <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Scheme Settings">
         <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
         </a><!--end MetricaDashboards--> 
          
           <?php 
            if(isset($_SESSION["active_scheme"])){
                  
                require("left-nav-bar-includes/left-nav-togglers.php");
            } 
              
            ?>
  <a  href="#apl_settings"  class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="User Settings">
         <i data-feather="settings" class="align-self-center menu-icon icon-dual"></i>
         </a> <!--end MetricaAuthentication-->

          
          
        
      </nav>
      <!--end nav-->
   </div>
   <!--end main-icon-menu-->
   <div class="main-menu-inner">
      <!-- LOGO -->
      <div class="topbar-left">
         <a href="index.html" class="logo">
         <span>
         <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-dark logo-sm">
         <img src="assets/images/logo.png" alt="logo-large" class=" logo-light logo-sm">
         </span>
         </a>
      </div>
      <!--end logo-->
      <div class="menu-body slimscroll">
         <div id="MetricaDashboard" class="main-icon-menu-pane">
            <div class="title-box">
               <h6 class="menu-title">Scheme Settings </h6>
            </div>
            <ul class="nav metismenu">
               <li class="nav-item"><a class="nav-link" href="main-dash.php">Main Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="main-create-scheme.php">Create Scheme</a></li>
               <li class="nav-item">
                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">Existing Schemes</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                  <ul class="nav-second-level" aria-expanded="false">
                     <li><a href="main-select-scheme.php">Select Scheme</a></li>
                     <li><a href="sub-main-scheme-details.php">Scheme Details</a></li>
                     <li><a href="sub-main-3rd-party-details.php">3rd Party Details</a></li>
                      
                     <li><a href="sub-main-scheme-rules-details.php">Scheme Rules</a></li>
                  </ul>
               </li>
               <!--end nav-item-->
               
               <li class="nav-item">
                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">Global Settings</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                  <ul class="nav-second-level" aria-expanded="false"> 
                       <li><a     href="main-global-settings.php">All Settings</a></li>
                       <li><a    href="sub-main-gs-scheme-types.php">Scheme Types</a></li>
                           <li><a  href="sub-main-gs-currencies.php">Currencies</a></li>
                           <li><a  href="sub-main-gs-titles.php">Titles</a></li>
                           <li><a  href="sub-main-gs-marital-status.php">Marital Status</a></li>
                           <li><a  href="sub-main-gs-banks.php">Banks </a></li>
                           <li><a  href="sub-main-gs-bank-branches.php">Bank Branches</a></li>
                           <li><a   href="sub-main-gs-statutory-req.php">Statutory Requirements</a></li>
                           <li><a   href="sub-main-gs-kyc-doc-types.php">K.Y.C Document Types</a></li>
                           <li><a   href="sub-main-gs-countries.php">Countries</a></li>
                           <li><a   href="sub-main-gs-provinces.php">Provinces</a></li>
                           <li><a   href="sub-main-gs-regions.php">Regions</a></li>
                           <li><a   href="sub-main-gs-zones.php">Zones</a></li>
                           <li><a   href="sub-main-gs-cities.php">Cities</a></li> 
                           <li><a   href="sub-main-gs-industries.php">Industries</a></li>
                           <li><a   href="sub-main-gs-business-classes.php">Business Classes</a></li>
                           <li><a  href="sub-main-gs-job-titles.php">Job Titles</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <?php 
            if(isset($_SESSION["active_scheme"])){
                  
                require("left-nav-bar-includes/left-nav-toggles.php");
            }  
            ?>
          
           <div id="apl_settings" class="main-icon-menu-pane">
                <div class="title-box">
                   <h6 class="menu-title">User Settings</h6>
                </div>
                <ul class="nav metismenu">
                   <li class="nav-item"><a class="nav-link" href="set-profile.php"><i class="dripicons-user text-muted mr-2"></i>Profile</a></li> 
                    <li class="nav-item"><a class="nav-link" href="set-manual.php"><i class="dripicons-question text-muted mr-2"></i>Manual</a></li>
                    <li class="nav-item"><a class="nav-link" href="set-support.php"><i class="dripicons-message text-muted mr-2"></i>Support</a></li>
                    <!--end nav-item-->

                </ul>
         </div>
       
      </div>
      <!--end menu-body-->
   </div>
   <!-- end main-menu-inner--> 
</div>