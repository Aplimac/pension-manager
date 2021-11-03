<?php 
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){ 
 
       $ssn_no = mysqli_real_escape_string($conn,  $_POST['ssn-for-member']); 
  
    $maritalstatus = mysqli_real_escape_string($conn,  $_POST['maritalstatus']);  
     $current_position = mysqli_real_escape_string($conn,  $_POST['current_position']);  
    $address1 = mysqli_real_escape_string($conn,  $_POST['address1']);  
    $address2 = mysqli_real_escape_string($conn,  $_POST['address2']);  
    $address_city = mysqli_real_escape_string($conn,  $_POST['address_city']); 
    $address_country = mysqli_real_escape_string($conn,  $_POST['address_country']);  
    $telephone = mysqli_real_escape_string($conn,  $_POST['telephone']);   
    $cellno = mysqli_real_escape_string($conn,  $_POST['cellno']);   
    $email = mysqli_real_escape_string($conn,  $_POST['email']);   
    $bank = mysqli_real_escape_string($conn,  $_POST['bank']);   
    $branchname = mysqli_real_escape_string($conn,  $_POST['branchname']);   
    $accno = mysqli_real_escape_string($conn,  $_POST['accno']);   
    $accname = mysqli_real_escape_string($conn,  $_POST['accname']);  
    
     //***********************************************************************************
                                           
    $sql = "UPDATE `members` SET `maritalstatus`='$maritalstatus',  `current_position`='$current_position',`address1`='$address1',`address2`='$address2',`address_cityaddress_city`='$address_city',`address_country`='$address_country',`telephone`='$telephone',`cellno`='$cellno',`email`='$email',`bank`='$bank',`branchname`='$branchname',`accno`='$accno',`accname`='$accname' WHERE `ssn_no` = '$ssn_no'";
        
    
    
      $result = mysqli_query($conn, $sql);
  
        $_SESSION['modal-trigger-memb-updated'] = true;
    
        echo   '<script>window.location.href = "../../memb-edit-employee.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
