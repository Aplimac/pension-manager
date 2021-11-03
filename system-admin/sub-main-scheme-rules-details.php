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
                           <li class="breadcrumb-item active">Scheme Rules</li>
                        </ol>
                     </div>
                     <h4 class="page-title">Scheme Rules</h4>
                  </div>
                  <!--end page-title-box-->
               </div>
               <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <!-- Nav tabs -->
                     <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                           <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Membership Rules</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                           <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">Contribution Rules</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                           <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Accumulation Rules</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                           <a class="nav-link" data-toggle="tab" href="#settings-banking" role="tab">Claims Rules</a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                           <div class="col-md-12 col-lg-12 col-xl-12">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                       <div class="card border mb-1 shadow-none">
                                          <div style="background-color:#c3d4db; " class="card-header" id="headingOne">
                                             <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Membership Categories +
                                             </a>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                   <div class="card">
                                                      <div class="card-body">
                                                         <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                            <div class="form-row">
                                                               <div class="col-md-6 mb-3">
                                                                  <label for="validationCustom01">Code</label>
                                                                  <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                  <div class="valid-feedback">
                                                                     Looks good!
                                                                  </div>
                                                                  <div class="invalid-feedback">
                                                                     This Field is Required!
                                                                  </div>
                                                               </div>
                                                               <!--end col-->
                                                               <div class="col-md-6 mb-3">
                                                                  <label for="validationCustom02">Description</label>
                                                                  <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                  <div class="valid-feedback">
                                                                     Looks good!
                                                                  </div>
                                                                  <div class="invalid-feedback">
                                                                     Make sure your input is in number format!
                                                                  </div>
                                                               </div>
                                                               <!--end col-->
                                                               <!--end col-->
                                                            </div>
                                                            <!--end form-row--> 
                                                            <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                         </form>
                                                         <!--end form-->                                          
                                                      </div>
                                                      <!--end card-body-->
                                                   </div>
                                                   <!--end card-->
                                                </div>
                                                <!--end col-->
                                             </div>
                                             <!--end row-->
                                          </div>
                                       </div>
                                       <div class="card mb-1 border shadow-none">
                                          <div style="background-color:#c3d4db; "  class="card-header" id="headingTwo">
                                             <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             Eligibility Requirements +
                                             </a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                             <div class="col-lg-12">
                                                <div class="card">
                                                   <div class="card-body">
                                                      <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                         <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                               <label for="validationCustom01">Date</label>
                                                               <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  This Field is Required!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 mb-3">
                                                               <label for="validationCustom02">Member Categories</label>
                                                               <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  Make sure your input is in number format!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 mb-3">
                                                               <label for="validationCustom01">Min Entry</label>
                                                               <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  This Field is Required!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 mb-3">
                                                               <label for="validationCustom02">Description</label>
                                                               <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  Make sure your input is in number format!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <!--end col-->
                                                         </div>
                                                         <!--end form-row--> 
                                                         <div class="form-row">
                                                            <div class="col-md-2 mb-3">
                                                               <label for="validationCustom01">Max Entry</label>
                                                               <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  This Field is Required!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-2 mb-3">
                                                               <label for="validationCustom02">Early Retirement</label>
                                                               <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  Make sure your input is in number format!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-2 mb-3">
                                                               <label for="validationCustom01">Normal Retirement</label>
                                                               <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  This Field is Required!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-2 mb-3">
                                                               <label for="validationCustom02">Late Retirement</label>
                                                               <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  Make sure your input is in number format!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-4 mb-3">
                                                               <label for="validationCustom02">Waiting Period</label>
                                                               <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                               <div class="invalid-feedback">
                                                                  Make sure your input is in number format!
                                                               </div>
                                                            </div>
                                                            <!--end col-->
                                                            <!--end col-->
                                                         </div>
                                                         <!--end form-row--> 
                                                         <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                      </form>
                                                      <!--end form-->                                          
                                                   </div>
                                                   <!--end card-body-->
                                                </div>
                                                <!--end card-->
                                             </div>
                                             <!--end col-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end card-body-->
                              </div>
                              <!--end card-->
                           </div>
                           <!--end col-->
                        </div>
                        <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card border mb-1 shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingblc">
                                                <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapsebl" aria-expanded="true" aria-controls="collapseOne"> Billing Calendar +
                                                </a>
                                             </div> 
                                             <div id="collapsebl" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <p class="mb-0 text-muted">
                                                      Billing Calendar (was null)
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-1 border shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingblb">
                                                <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapsebl2" aria-expanded="false" aria-controls="collapseTwo">
                                                Contribution Rates +
                                                </a>
                                             </div>
                                             <div id="collapsebl2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <div class="col-lg-12">
                                                      <div class="card">
                                                         <div class="card-body">
                                                            <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                               <div class="form-row">
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Date</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Member Portion %</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Employer Portion</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Gross Salary</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <div class="form-row">
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom01">Salary  Ceiling</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">AVC %</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            </form>
                                                            <!--end form-->                                          
                                                         </div>
                                                         <!--end card-body-->
                                                      </div>
                                                      <!--end card-->
                                                   </div>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-1 border shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingbla">
                                                <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapsebl3" aria-expanded="false" aria-controls="collapseTwo">
                                                Cost & Expenses +
                                                </a>
                                             </div>
                                             <div id="collapsebl3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <div class="col-lg-12">
                                                      <div class="card">
                                                         <div class="card-body">
                                                            <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                               <div class="form-row">
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Date</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Select Cost</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Defined Member</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Cost Percent</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <div class="form-row">
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom01">Rate Per Mile</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Salary</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Date</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            </form>
                                                            <!--end form-->                                          
                                                         </div>
                                                         <!--end card-body-->
                                                      </div>
                                                      <!--end card-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                              </div>
                              <!--end col-->
                              <!--end col-->
                           </div>
                           <!--end row-->
                        </div>
                        <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card border mb-1 shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingOne">
                                                <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Interest Rates +
                                                </a>
                                             </div>
                                             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <p class="mb-0 text-muted">
                                                      was null
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-1 border shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingTwo">
                                                <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Benefit Projections Assumptions +
                                                </a>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <p class="mb-0 text-muted">
                                                      was null
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                              </div>
                              <!--end col-->
                              <!--end col-->
                           </div>
                           <!--end row-->
                        </div>
                        <div class="tab-pane p-3" id="settings-banking" role="tabpanel">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card border mb-1 shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingOne">
                                                <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Claim Group Types +
                                                </a>
                                             </div>
                                             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <div class="col-lg-12">
                                                      <div class="card">
                                                         <div class="card-body">
                                                            <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                               <div class="form-row">
                                                                  <div class="col-md-12 mb-3">
                                                                     <label for="validationCustom01">Group type</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            </form>
                                                            <!--end form-->                                          
                                                         </div>
                                                         <!--end card-body-->
                                                      </div>
                                                      <!--end card-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-1 border shadow-none">
                                             <div style="background-color:#c3d4db; "   class="card-header" id="headingTwo">
                                                <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Claim Types +
                                                </a>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <div class="col-lg-12">
                                                      <div class="card">
                                                         <div class="card-body">
                                                            <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                               <div class="form-row">
                                                                  <div class="col-md-4 mb-3">
                                                                     <label for="validationCustom01">Group type</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-4 mb-3">
                                                                     <label for="validationCustom01">Claim Type Name</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-4 mb-3">
                                                                     <label for="validationCustom01">Claim Type Code</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            </form>
                                                            <!--end form-->                                          
                                                         </div>
                                                         <!--end card-body-->
                                                      </div>
                                                      <!--end card-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card mb-1 border shadow-none">
                                             <div style="background-color:#c3d4db; "     class="card-header" id="headingTwo">
                                                <a href="#" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                                               
                                                Claim Formulas +
                                                </a>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                  <div class="col-lg-12">
                                                      <div class="card">
                                                         <div class="card-body">
                                                            <form class="needs-validation" method="POST" action="./controllers/create_schema.php" novalidate>
                                                               <div class="form-row">
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Group Type</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Claim Type Name</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom01">Member Category</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-3 mb-3">
                                                                     <label for="validationCustom02">Formula Name</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <div class="form-row">
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom01">Min Normal Service(months)</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Max Normal Service(months)</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Normal Multiplier</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Extra Service Multiplier(%)</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Min Eligible Age</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Max Eligible Age</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <div class="form-row">
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom01">Salary Period</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Min Pension</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Effective Date</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Credits</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Employment Status:</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Compulsory Employment Period</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                             <div class="form-row">
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom01">Compulsory Employment Period Within</label>
                                                                     <input type="text" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        This Field is Required!
                                                                     </div>
                                                                  </div>
                                                                  <!--end col-->
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Credit Date</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Years To Subtract</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Maximum Credit Service</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-2 mb-3">
                                                                     <label for="validationCustom02">Required Documentation:</label>
                                                                     <input type="number" class="form-control" name="tax_no" id="validationCustom02"   required>
                                                                     <div class="valid-feedback">
                                                                        Looks good!
                                                                     </div>
                                                                     <div class="invalid-feedback">
                                                                        Make sure your input is in number format!
                                                                     </div>
                                                                  </div>
                                                                  
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                                  <!--end col-->
                                                               </div>
                                                               <!--end form-row--> 
                                                               <button class="btn btn-gradient-primary" type="submit">Save</button>
                                                            </form>
                                                            <!--end form-->                                          
                                                         </div>
                                                         <!--end card-body-->
                                                      </div>
                                                      <!--end card-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                              </div>
                              <!--end col-->
                              <!--end col-->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end card-body-->
               </div>
               <!--end card-->
            </div>
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