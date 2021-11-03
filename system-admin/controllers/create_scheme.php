<?php 
require('../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
    $reg_no = mysqli_real_escape_string($conn,  $_POST['reg_no']);
    $tax_no= mysqli_real_escape_string($conn,  $_POST['tax_no']);
    $scheme_name = mysqli_real_escape_string($conn,  $_POST['scheme_name']);
    $scheme_type = mysqli_real_escape_string($conn,  $_POST['scheme_type']);
    $reassuarance_no= mysqli_real_escape_string($conn,  $_POST['reassuarance_no']);
    $commencement_date = mysqli_real_escape_string($conn,  $_POST['commencement_date']);
    $conversion_date = mysqli_real_escape_string($conn,  $_POST['conversion_date']);
    $rules_amendment_date = mysqli_real_escape_string($conn,  $_POST['rules_amendment_date']);
    $presevation_fund = mysqli_real_escape_string($conn,  $_POST['presevation_fund']);
    $scheme_default_currency = mysqli_real_escape_string($conn,  $_POST['scheme_default_currency']);
    $address1 = mysqli_real_escape_string($conn,  $_POST['address1']); 
    $address2 = mysqli_real_escape_string($conn,  $_POST['address2']); 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $city = mysqli_real_escape_string($conn,  $_POST['city']);
     //***********************************************************************************
     
     $sql = "SELECT * FROM `scheme`";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    $regno_flag = 0 ; $taxno_flag = 0; $schemename_flag = 0;

    if ($resultCheck > 0)
    {

        while ($row = mysqli_fetch_assoc($result))
        {
            if ($reg_no == $row['reg_no']){
                $regno_flag = 1;
            } 
            if ($tax_no == $row['tax_no']){
                $taxno_flag = 1;
            } 
            if ($scheme_name == $row['scheme_name']){
                $schemename_flag = 1;
            } 
        }
    }
    
      
    if($regno_flag){
        echo '<script>alert("<Error 100>There is an existing scheme with the same registraion number!")</script>';
    }else if($taxno_flag){
        echo '<script>alert("<Error 101>There is an existing scheme with the same tax number!")</script>';
        
    }else if($schemename_flag){
        echo '<script>alert("<Error 102>There is an existing scheme with the same   scheme name!")</script>';
        
    }else{
         $sql = "INSERT INTO scheme (`reg_no`, `tax_no`, `scheme_name` , `scheme_type`, `reassuarance_no`, `commencement_date`, `conversion_date`, `rules_amendment_date` , `presevation_fund`, `scheme_default_currency` , `address1` , `address2` , `country`, `city`) VALUES ( '$reg_no', '$tax_no', '$scheme_name' , '$scheme_type', '$reassuarance_no', '$commencement_date', '$conversion_date', '$rules_amendment_date' , '$presevation_fund', '$scheme_default_currency' , '$address1' , '$address2' , '$country', '$city')";
    
 
      $result = mysqli_query($conn, $sql); 
        
      $_SESSION['scheme-created'] = true;
    }
   
       echo   '<script>window.location.href = "../main-create-scheme.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
