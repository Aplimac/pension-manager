<?php 
require('../config/db_config.php');
error_reporting(0);

if(isset($_SESSION['memb-memb-found'])){
    if($_SESSION['memb-memb-found']){
    
    
    $ssn_no =  mysqli_real_escape_string($conn,  $_SESSION['ssn-for-member']); 
    $title ; 
    $first_name  ;
    $lastname  ;
    $maritalstatus  ;
    $gender  ;
    $dob  ;
    $nat_id_no ; 
    $country ;
    $doe  ;
    $current_position  ;
    $address1  ;
    $address2 ;
    $address_city  ;
    $address_country  ;
    $telephone  ;  
    $cellno  ;
    $email  ;
    $bank  ;
    $branchname  ;
    $accno ;  
    $accname ; 
     //***********************************************************************************
                                             
    $sql = "SELECT * FROM `members` WHERE `ssn_no` = '$ssn_no'"; 
 
      $result = mysqli_query($conn, $sql);
    
$resultCheck = mysqli_num_rows($result);
     if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
                    
    $title = $row['title'];          
    $first_name  = $row['first_name'];          
    $lastname = $row['lastname'];          
    $maritalstatus = $row['maritalstatus'];          
    $gender = $row['gender'];          
    $dob = $row['dob'];          
    $nat_id_no = $row['nat_id_no'];          
    $country = $row['countryoforigin'];          
    $doe = $row['doe'];          
    $current_position  = $row['current_position'];          
    $address1 = $row['address1'];          
    $address2 = $row['address2'];          
    $address_city = $row['address_cityaddress_city'];          
    $address_country  = $row['address_country'];          
    $telephone  = $row['telephone'];          
    $cellno  = $row['cellno'];          
    $email    = $row['email'];     
    $bank    = $row['bank'];           
    $branchname  = $row['branchname'];          
    $accno = $row['accno'];          
    $accname = $row['accname'];          

    }
}
    
       
        
    //*********************************************************************************************
    
    


}}
    else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.php";</script>';
        exit();
}

?>
                       <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="mt-0 header-title">Membership Form</h4>
                            <h3>Basic Details</h3>
                           <br/>
                           <form class="needs-validation" method="POST" action="controllers/memb-controller/update-memb-deatails.php" novalidate>
                              <!--end form-row-->
                              <div class="form-row">
                                 <div class="col-md-12 mb-3">
                                    <label   for="validationCustom02">SSN</label>
                                    <input  readonly value="<?php  echo $ssn_no; ?>"  type="text" name="ssn-for-member" class="form-control" id="validationCustom02"   required> 
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label   for="validationCustom02">Title</label>
                                    <select disabled  readonly  type="text" name="title" class="form-control" id="validationCustom02"   required>
                                       <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                       <option value="Mr">Mr</option>
                                       <option value="Mrs">Mrs</option>
                                       <option value="Miss">Miss</option>
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
                                    <label   for="validationCustom02">First Name</label>
                                    <input value="<?php echo $first_name; ?>" readonly  type="text" name="first_name" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Make sure your input is in number format!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label    for="validationCustom02">Last Name</label>
                                    <input value="<?php echo $lastname; ?>"  readonly type="text" name="lastname" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Make sure your input is in number format!
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Marital Status</label> 
                                    <select      type="text" name="maritalstatus" class="form-control" id="validationCustom02"   required>
                                       <option   value="<?php echo $maritalstatus; ?>"  ><?php echo $maritalstatus; ?></option>
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
                                    <label    for="validationCustom02">Gender</label>
                                    <select disabled readonly input type="text" name="gender" class="form-control" id="validationCustom02"   required>
                                       <option   value="<?php echo $gender; ?>"  ><?php echo $gender; ?></option>
                                       <option value="Mr">Male</option>
                                       <option value="Mrs">Female</option>
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
                                    <label    for="validationCustom02">D.O.B</label>
                                    <input   disabled value="<?php echo $dob; ?>"  readonly  type="date" name="dob" class="form-control" id="validationCustom02"   required>
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
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">National Identity No</label>
                                    <input    value="<?php echo $nat_id_no; ?>"  readonly  type="text" name="nat_id_no" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-8 mb-3">
                                    <label for="validationCustom02">Country Of Origin:</label>
                                    <select disabled readonly type="text" name="countryoo" class="form-control" id="validationCustom02"   required>
                                       <option    value="<?php echo $country; ?>"   > <?php echo $country; ?>  </option>
                                       <option value="Zimbabwe">Zimbabwe</option>
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
                              <h3>Employment Details</h3>
                              <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Date of Employment</label>
                                    <input readoonly disabled value="<?php echo $doe; ?>"  type="date" name="doe" class="form-control" id="validationCustom02"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Current Position</label>
                                    <input  value="<?php echo $current_position; ?>"  type="text" name="current_position" class="form-control" id="validationCustom02"   required>
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
                                    <input  value="<?php echo $address1; ?>"  type="text" name="address1" class="form-control" id="validationCustom02"   required>
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
                                    <input   value="<?php echo $address2; ?>" type="text" name="address2" class="form-control" id="validationCustom02"   required>
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
                                       <option   value="<?php echo $address_city; ?>" >    <?php echo $address_city; ?>  </option>
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
                                       <option   value="<?php echo $address_country; ?>" >   <?php echo $address_country; ?>  </option>
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
                                    <label for="validationCustom02">Telephone Number</label>
                                    <input  value="<?php echo $telephone; ?>"  type="text" name="telephone" class="form-control" id="validationCustom02"   required> 
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Cell No.</label>
                                    <input  value="<?php echo $cellno; ?>"  type="text" name="cellno" class="form-control" id="validationCustom02"   required> 
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
                                    <input  value="<?php echo $email; ?>"  type="text" name="email" class="form-control" id="validationCustom02"   required>  
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col--> 
                              </div>
                              <h3>Banking Details</h3>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Bank </label>
                                    <select type="text" name="bank" class="form-control" id="validationCustom02"    required>
                                       <option selected="selected"   value="<?php echo $bank; ?>" >   <?php echo $bank; ?>  </option>
                                       <option value="FIRST CAPITAL">FIRST CAPITAL</option>
                                       <option value="BEVERLEY">BEVERLEY</option>
                                       <option value="CABS">CABS</option>
                                       <option value="FNBS">FNBS</option>
                                       <option value="FOUNDERS">FOUNDERS</option>
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
                                    <label for="validationCustom01">Branch Name </label>
                                    <select type="text" name="branchname" class="form-control" id="validationCustom02"    required>
                                       <option   value="<?php echo $branchname; ?>" >  <?php echo $branchname; ?>  </option>
                                       <option value="Kwame">Kwame</option>
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
                                    <label for="validationCustom02">Account No.</label>
                                    <input  value="<?php echo $accno; ?>"  type="text" name="accno" class="form-control" id="validationCustom02"   required>  
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       This Field is Required!
                                    </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Account Name</label>
                                    <input  value="<?php echo $accname; ?>"  type="text" name="accname"  class="form-control" id="validationCustom02"   required> 
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
                              <button type="submit" class="btn btn-primary waves-effect waves-light"  >Update Member Details</button> 
                           </form>
                           <!--end form-->                                          
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                  <!--end col-->
               </div>
            