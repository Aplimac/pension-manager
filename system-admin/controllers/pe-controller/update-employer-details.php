<?php 
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
    $ssrn = mysqli_real_escape_string($conn,  $_POST['ssrn']); 
 
    $holdingcomp = mysqli_real_escape_string($conn,  $_POST['holdingcomp']); 
    $companysize = mysqli_real_escape_string($conn,  $_POST['companysize']); 
    $telephone = mysqli_real_escape_string($conn,  $_POST['telephone']); 
    $cellnumber = mysqli_real_escape_string($conn,  $_POST['cellnumber']); 
    $address1 = mysqli_real_escape_string($conn,  $_POST['address1']);  
    $address2 = mysqli_real_escape_string($conn,  $_POST['address2']);  
    $city = mysqli_real_escape_string($conn,  $_POST['city']);  
    $country = mysqli_real_escape_string($conn,  $_POST['country']);  
    $accname = mysqli_real_escape_string($conn,  $_POST['accname']);   
    $accno = mysqli_real_escape_string($conn,  $_POST['accno']);   
    $bank = mysqli_real_escape_string($conn,  $_POST['bank']);   
    $branchname = mysqli_real_escape_string($conn,  $_POST['branchname']);    
     //***********************************************************************************
  
                                            
    $sql = "UPDATE `employers` SET  `holdingcomp`='$holdingcomp',`companysize`='$companysize',`telephone`='$telephone',`cellnumber`='$cellnumber',`address1`='$address1',`address2`='$address2',`city`='$city',`country`='$country',`accname`='$accname',`accno`='$accno',`bank`='$bank',`branchname`='$branchname' WHERE  `ssrn`='$ssrn'";
    
 
      $result = mysqli_query($conn, $sql);
  
        $_SESSION['modal-trigger-emp-updated'] = true;
    
        echo   '<script>window.location.href = "../../pe-tl-edit-employer.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
