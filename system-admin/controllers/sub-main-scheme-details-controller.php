<?php
require('../../config/db_config.php');
session_start();

if (!isset($_POST['submit'])) {
    $reg_no = mysqli_real_escape_string($conn, $_POST['reg_no']);
       $rules_amendment_date = mysqli_real_escape_string($conn, $_POST['rules_amendment_date']);
    $presevation_fund = mysqli_real_escape_string($conn, $_POST['presevation_fund']);
     $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
    $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    //***********************************************************************************
    $sql = "SELECT * FROM `scheme` WHERE `reg_no` = '$reg_no' ";
    $flag = 0;
      $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {

            $flag = 1; 

        }
    }
    

    if ($flag == 1){
          $sql = "UPDATE `scheme` SET   `rules_amendment_date`='$rules_amendment_date', `presevation_fund`='$presevation_fund' , `address1`='$address1', 
    `address2`='$address2', `country`='$country', `city`='$city' WHERE  `reg_no` = '$reg_no'";
    
    $result = mysqli_query($conn, $sql);
         $_SESSION['scheme_edit-update_success'] = true; 
        
    }else{
        
        
    }
  


     
  
    
    
             
 

     echo   '<script> window.location.href = "../sub-main-scheme-details.php";</script>';
      
    //*********************************************************************************************
} else {
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
