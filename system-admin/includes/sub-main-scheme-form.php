<?php
 require("../config/db_config.php");  
 if (isset($_SESSION['active_scheme'])) {
    $sql    = "SELECT * FROM `scheme` WHERE scheme_name = '".$_SESSION['active_scheme']."' ;";
   
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
   if($resultCheck>0){
    while ($scheme = mysqli_fetch_assoc($result)) {
        echo ' 
    <form class="needs-validation" method="POST" action="./controllers/sub-main-scheme-details-controller.php" novalidate> 
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Reg No.</label>
                <input type="text" readonly  class="form-control" name="reg_no" id="validationCustom01" value ="'.$scheme['reg_no']. ' "  required>
                <div class="valid-feedback">
                    Looks good!
                </div> 
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Tax Number</label>
                <input type="text"  readonly class="form-control" name="tax_no" id="validationCustom02" value = "'.$scheme['tax_no']. '"   required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Make sure your input is in number format!
                </div>
            </div><!--end col-->
        
            <!--end col-->
        </div><!--end form-row-->
        <div class="form-row">
        <div class="col-md-12 mb-3">
                <label for="validationCustom02">Scheme Name</label>
                <input type="text"    readonly  name="scheme_name" class="form-control" id="validationCustom02" value = "'.$scheme['scheme_name']. '"  required>
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
                    <label for="validationCustom02">Scheme Type</label>
                    <input   readonly   type="text" name="scheme_type" class="form-control" id="validationCustom02" value = "'.$scheme['scheme_type']. '"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Reassurence Number</label>
                    <input   readonly   type="text" name="reassuarance_no" class="form-control" id="validationCustom02" value = "'.$scheme['reassuarance_no']. '"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    Make sure your input is in number format!
                </div>
            </div><!--end col-->
        </div><!--end form-row-->
        
        <div class="form-row">
            <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Commencement Date</label>
                    <input   readonly   type="text"  name="commencement_date"  class="form-control" placeholder="2017-06-04" value = "'.$scheme['commencement_date']. '" id="mdate"> 
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Conversion Date</label>
                    <input   readonly   type="text"  name="conversion_date"  class="form-control" placeholder="2017-06-04" value = "'.$scheme['conversion_date']. '" id="mdate2">  
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Rules Amendment Date</label>
                <input   type="date"  name="rules_amendment_date"  class="form-control"   value = "'.$scheme['rules_amendment_date']. '" id="mdate3"> 
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
                    <label for="validationCustom02">Presevation Fund</label>
                    <input   type="text" name="presevation_fund" class="form-control" id="validationCustom02" value = "'.$scheme['presevation_fund']. '" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Scheme Default Currency</label>
            <select type="text" readonly  name="scheme_default_currency" class="form-control" id="validationCustom02" placeholder="Scheme Default Currency" aria-selected = "'.$scheme['scheme_default_currency']. '"  required> 
                    <option value="ZWL">Currency: ZWL</option>
                    <option value="USD">Currency: USD</option>
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
            <div class="col-md-12 mb-3">
                    <label for="validationCustom02">Address Line 1</label>
                    <input type="text"   name="address1" class="form-control" id="validationCustom02" value = "'.$scheme['address1']. '" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            
        </div>
        
        <div class="form-row">
            <div class="col-md-12 mb-3">
                    <label for="validationCustom02">Address Line 2</label>
                    <input type="text"  name="address2" class="form-control" value = "'.$scheme['address2'].'" >
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
                    <label for="validationCustom02">Country</label>
                <select type="text"  name="country" class="form-control" id="validationCustom02" placeholder="Counrty" value = "'.$scheme['country']. '"  required> 
                    <option value="Zimbabwe">Country: Zimbabwe</option> 
                    <option value="South Africa">Country: South Africa</option> 
                </select>  <div class="valid-feedback">
                        Looks good!
                    </div>
                <div class="invalid-feedback">
                    This Field is Required!
                </div>
            </div><!--end col-->
            
            <div class="col-md-6 mb-3">
                    <label for="validationCustom02">City</label>
                    <input type="text"  name="city" class="form-control" id="validationCustom02" value = "'.$scheme['city']. '" required>
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
        <button class="btn btn-gradient-primary" type="submit">Update Details</button>
    </form> <!--end form-->   
     ';
    }

   }else{
       echo 'No results obtained';
   }
} else {
    echo "No Scheme is selected";
}
