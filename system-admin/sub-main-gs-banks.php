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
                                        <li class="breadcrumb-item active"> Banks</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Banks</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation mt-4"  onsubmit=" return Bank()" action="./controllers/gs-controllers/sub-main-add-bank.php" method="POST" novalidate> 
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                        <select type="text" name="bank" class="form-control" id="validationCustom02" placeholder="Counrty"   required> 
                                                            <option selected="selected" value="0">Select a bank</option>
                                                            <option value="1">FIRST CAPITAL</option>
                                                            <option value="2">BEVERLEY</option>
                                                            <option value="3">CABS</option>
                                                            <option value="4">FNBS</option>
                                                            <option value="5">FOUNDERS</option>
                                                            <option value="6">ZBS</option>
                                                            <option value="7">STANBIC</option>
                                                            <option value="8">ZB BANK</option>
                                                            <option value="9">STANDARD CHARTERED</option>
                                                            <option value="10">CBZ</option>
                                                            <option value="11">TIME BANK</option>
                                                            <option value="12">FIRST BANK</option>
                                                            <option value="13">Metbank</option>
                                                            <option value="14">NEDBANK</option>
                                                            <option value="15">POSB</option>
                                                            <option value="16">RENAISSANCE MERCHANT BANK</option>
                                                            <option value="17">tba</option>
                                                            <option value="18">Chitungwiza</option>
                                                            <option value="19">ECOBANK</option>
                                                            <option value="20">FBC</option>
                                                            <option value="21">George Silundika</option>
                                                            <option value="22">Banc</option>
                                                            <option value="23">NBS</option>
                                                            <option value="24">AGRIBANK</option>
                                                            <option value="25">DEFERRED</option>
                                                            <option value="26">Already Paid</option>
                                                            <option value="1026">Victoria Falls</option>
                                                            <option value="1027">MBCA</option>
                                                            <option value="1028">GETBUCKS MICROFINANCE BANK</option>
                                                            <option value="1029">MUTARE</option>
                                                            <option value="1030">Ecocash</option>
                                                            <option value="1031">Agri</option>
                                                            <option value="1032">Steward</option>
                                                            <option value="1033">Steward murewwa</option>
                                                            <option value="1034">NMB</option>
                                                            <option value="1035">African Century Bank</option>
                                                            <option value="1036">BANCABC</option>
                                                       </select>                                                            
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div> 
                                                            <div class="invalid-feedback">
                                                                This Field is Required!
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-4 mb-3">
                                                            <input type="text" style="display: none;" name="banks" id="banks">
                                                        
                                                            <input type="text" class="form-control" name="code" id="validationCustom01" placeholder="Code"  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Make sure your input is in number format!
                                                            </div>
                                                        </div><!--end col-->
                                                        
                                                        <div class="col-md-4 mb-3">
                                                            
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
                                                        <th data-name="firstName">Bank Name </th>
                                                        <th data-name="lastName" width="10%">Code</th>
                                                        <th data-name="Del">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php require('./includes/populate-gs-tables/sub-main-banks-table.php') ?>
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
          function Bank(){
              let bank= document.querySelector('[name = "bank"]').value;
              let bankName = document.querySelector('[name= "bank"]');
              //changing value;
              document.getElementById('banks').value = bankName[bank].innerText;              
            return true;
          }

      
        //when the delete icon is clicked this post is run
        function clickedIcon(id){
            // create a form with the id element of table
            var form = document.createElement("form");
             document.body.appendChild(form);
             form.method = "POST";
             form.action = "controllers/gs-controllers/sub-delete-bank.php";
             var element1 = document.createElement("input");         
                 element1.name="id";
                 element1.value = id;
                 element1.type = 'text';
                 form.appendChild(element1);
            var element2 = document.createElement("input");         
                element2.name="endpoint";
                element2.value = "sub-main-gs-banks.php";
                element2.type = 'text';
                form.appendChild(element2);

             form.submit();

        }

      </script>
      
        
    </body>

 
</html>