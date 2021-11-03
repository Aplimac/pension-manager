<?php 
   //Populates the add form for dependant  
   
   ?>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <h4 class="mt-0 header-title">Membership Form</h4>
            <h3>Dependant Basic Details</h3>
            <br/>
            <form class="needs-validation" method="POST" action="controllers/memb-controller/add-dependant.php" novalidate>
               <!--end form-row-->
               <div class="form-row"> 
                  <div class="col-md-12 mb-3">
                     <label for="validationCustom02">Select Member</label>
                  
                                            <select name="ssn_no"  class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                 <?php  require('member-select-pop.php'); ?>
                                                    
                                                   </select>
                                        </div><!-- end col -->                                     
                                     
                       <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                <div  class="form-row">
                  <!--end col-->
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">First Name</label>
                     <input type="text" name="first_name" class="form-control" id="validationCustom02"   required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        Make sure your input is in number format!
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col-md-4 mb-3">
                  <!--end col-->
                     <label for="validationCustom02">Last Name</label>
                     <input type="text" name="lastname" class="form-control" id="validationCustom02"   required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        Make sure your input is in number format!
                     </div>
                  </div>
                   
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">Gender</label>
                     <input type="text" name="gender" class="form-control" id="validationCustom02"   required> 
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">Identity Document Type</label> 
                     <select  type="text" name="identity_doc_type" class="form-control" id="validationCustom02"   required>
                        <option  >Select Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                     </select>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">Identity No</label>
                     <input type="text" name="Id_no" class="form-control" id="validationCustom02"   required> 
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">Date Of Birth</label>
                     <input type="date" name="dob" class="form-control" id="validationCustom02"   required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <!--end form-row-->
               <div class="form-row"> 
                  <!--end col-->
                  <div class="col-md-8 mb-3">
                     <label for="validationCustom02">Relationship to Member</label>
                     <select type="text" name="rel_to_memeber" class="form-control" id="validationCustom02"   required>
                        <option  >Select</option> 
                        <option value="Child">Child</option>
                        <option value="Mother">Mother</option> 
                         <option value="Spouse">Father</option>
                        <option value="Spouse">Sister</option>
                        <option value="Brother">Brother</option>
                        <option value="Grand Mother">Grand Mother</option>
                        <option value="Grand Father">Grand Father</option>
                        <option value="Aunt">Aunt</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Step Mother">Step Mother</option>
                        <option value="Step Father">Step Father</option>
                     </select>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
               </div> 
                
               <h3>Contact Details</h3>
               <div class="form-row">
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02">Address Line 1</label>
                     <input type="text" name="address1" class="form-control" id="validationCustom02"   required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02">Address Line 2</label>
                     <input type="text" name="address2" class="form-control" id="validationCustom02"   required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <div class="form-row">
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02">City</label>
                     <select type="text" name="address_city" class="form-control" id="validationCustom02"   required>
                        <option value="Harare"> Harare</option>
                        <option value="Marondera"> Marondera</option>
                     </select>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02">Country</label>
                     <select type="text" name="address_country" class="form-control" id="validationCustom02"   required>
                        <option value="Zimbabwe"> Zimbabwe</option>
                     </select>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <div class="form-row"> 
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02">Cell No.</label>
                     <input type="text" name="cellno" class="form-control" id="validationCustom02"   required> 
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <div class="form-row">
                  <div class="col-md-6 mb-3">
                     <label for="validationCustom02"> Email Address</label>
                     <input type="email" name="email" class="form-control" id="validationCustom02"   required>  
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                     <div class="invalid-feedback">
                        This Field is Required!
                     </div>
                  </div>
                  <!--end col--> 
               </div>
                   <br/>
               <button type="submit" class="btn btn-primary waves-effect waves-light"  >Add  Dependant</button> 
            </form>
            <!--end form-->                                          
         </div>
         <!--end card-body-->
      </div>
      <!--end card-->
   </div>
   <!--end col-->
</div>