<?php 
require('../config/db_config.php');
error_reporting(0);

if(isset($_SESSION['ssn-for-emp'])){
    if($_SESSION['ssn-for-emp']){
    $ssrn = mysqli_real_escape_string($conn,  $_SESSION['ssn-for-emp']); 
    $tradename; 
    $legalname ; 
    $vatnumber ; 
    $patnumber ; 
    $industry ; 
    $regdate ; 
    $tradecomdate; 
    $holdingcomp ; 
    $companysize ; $telephone; $cellnumber;
    $cellnumber ; 
    $address1 ;  
    $address2;  
    $city ;  
    $country ;  
    $accname ;   
    $accno ;   
    $bank;   
    $branchname ;    
     //***********************************************************************************
                                             
    $sql = "SELECT * FROM `employers` WHERE `ssrn` = '$ssrn'";
    
 
      $result = mysqli_query($conn, $sql);
    
$resultCheck = mysqli_num_rows($result);
     if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
          
        $tradename = $row['tradename'];          
        $legalname = $row['legalname'];          
        $vatnumber = $row['vatnumber'];          
        $patnumber = $row['patnumber'];          
        $industry = $row['industry'];          
        $regdate = $row['regdate'];          
        $tradecomdate = $row['tradecomdate'];           
        $holdingcomp = $row['holdingcomp'];     
        $telephone = $row['telephone'];          
        $cellnumber = $row['cellnumber'];          
        $companysize = $row['companysize'];          
        $address1 = $row['address1'];          
        $address2 = $row['address2'];          
        $city = $row['city'];          
        $country = $row['country'];          
        $accname = $row['accname'];          
        $accno = $row['accno'];      
        $bank = $row['bank'];      
        $branchname = $row['branchname'];

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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="controllers/pe-controller/update-employer-details.php" method="post">
                                    <h4 class="mt-0 header-title">Edit Employers Form</h4>
                                    
                                         <h3>Basic Details</h3>
                                        <fieldset>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">SSRN</label>
                                                        <input readonly type="text" value="<?php echo $ssrn ?>" name="ssrn" class="form-control" name="reg_no" id="validationCustom01"   required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                            </div>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom02">Trade Name </label>
                                                        <input type="text"  readonly value="<?php echo $tradename ?>"   name="tradename"  class="form-control" name="tax_no" id="validationCustom02"   required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Legal Name</label>
                                                            <input readonly value="<?php echo $legalname ?>"  type="text" name="legalname" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                This Field is Required!
                                                            </div>
                                                    </div><!--end col-->
                                                    
                                                </div><!--end form-row-->
 
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">VAT Number</label>
                                                            <input readonly  value="<?php echo $vatnumber ?>"  type="text" name="vatnumber" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Partner Number</label>
                                                            <input readonly  value="<?php echo $patnumber ?>"  type="number" name="patnumber" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                            <label for="validationCustom02">Industry</label>
                                                        <input readonly  value="<?php echo $industry ?>"  type="text" name="industry" class="form-control" id="validationCustom02"  required>
                                                             
                                                                <div class="valid-feedback">
                                                                    Looks good!
                                                                </div>
                                                            <div class="invalid-feedback">
                                                                This Field is Required!
                                                            </div>
                                                    </div><!--end col-->
                                                </div><!--end form-row-->
                                                
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Registration Date</label>
                                                            <input readonly type="date"  value="<?php echo $regdate ?>"  name="regdate"  class="form-control"   id="mdate_pe_tl_reg">  
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Trade Commencement Date</label>
                                                            <input readonly type="date"  value="<?php echo $tradecomdate ?>"  name="tradecomdate"  class="form-control"  id="mdate_pe_tl_com"> 
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                                
                                                
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Holding Company</label>
                                                        <select value="<?php echo $holdingcomp ?>"  type="text" name="holdingcomp" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency"   required> 
                                                            <option value="SELF">SELF</option>
                                                        </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Company Size</label>
                                                            <input  value="<?php echo $companysize ?>" type="number" name="companysize" class="form-control" id="validationCustom02" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Telephone   </label>
                                                            <input  value="<?php echo $telephone ?>" type="text" name="telephone" class="form-control" id="validationCustom02" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Cell Number   </label>
                                                            <input value="<?php echo $cellnumber ?>"  type="text" name="cellnumber" class="form-control" id="validationCustom02" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                   
                                                </div>
                                              
                                                <div class="form-row">
                                                     
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Address Line 1</label>
                                                            <input  value="<?php echo $address1 ?>" type="text" name="address1" class="form-control" id="validationCustom02"   required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Address Line 2</label>
                                                            <input value="<?php echo $address2 ?>"  type="text" name="address2" class="form-control" id="validationCustom02"  required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                </div>
                                                
                                                <div class="form-row">
                                                    
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">City</label>
                                                             <select    type="text" name="city" class="form-control" id="validationCustom02"   required> 
                                                            <option value="<?php echo $city ?> "> <?php echo $city ?> </option> 
                                                            <option value="Marondera"> Marondera</option> 
                                                        </select> 
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationCustom02">Country</label>
                                                        <select    type="text" name="country" class="form-control" id="validationCustom02"   required> 
                                                            <option value="<?php echo $country ?>"> <?php echo $country ?> </option>  
                                                        </select>  
                                                        <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                                
                                                <div class="form-row">
                                                </div>                                    
                                            
                                        </fieldset> <!-- End of field set -->
            <!-- Directors section --> 
                                        <!-- Banking details -->
                                        <h3>Banking Details</h3>
                                        <fieldset> 
                                            
                                                <div class="form-row">                                           
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Account Name</label>
                                                        <input value="<?php echo $accname ?>"  type="text" class="form-control" name="accname" id="validationCustom02"   required>                                                      
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Account Number</label>
                                                        <input value="<?php echo $accno ?>"  type="text" class="form-control" name="accno" id="validationCustom02"   required>                                                      
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div> 
                                                        <div class="invalid-feedback">
                                                            This Field is Required!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Bank </label>
                                                        <select   type="text" name="bank" class="form-control" id="validationCustom02"    required> 
                                                            <option selected="selected" value="<?php echo $bank ?>"><?php echo $bank ?></option>
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
                                                    </div><!--end col-->
                                                </div><!--end form-row-->
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom02">Branch Name</label>
                                                        <select   type="text" name="branchname" class="form-control" id="validationCustom02"    required>
                                                            <option value="<?php echo $branchname ?>"><?php echo $branchname ?></option> 
                                                            <option value="Kwame">Kwame</option> 
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Make sure your input is in number format!
                                                        </div>
                                                    </div><!--end col-->
                                                    <!--end col-->
                                                </div><!--end form-row-->

                                        </fieldset>

                                        <!-- Employees upload -->
                                        
                                       
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> 
                                    
                                    </form>
 
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                   
        