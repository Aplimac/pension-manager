<?php 
//add currencies to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $currency_name = mysqli_real_escape_string($conn,  $_POST['name']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']); 
    $description = mysqli_real_escape_string($conn,  $_POST['description']); 
    $expiry_date = mysqli_real_escape_string($conn,  $_POST['expiry']); 
    $effective_date =  mysqli_real_escape_string($conn,  $_POST['effective']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `currencies`( `code`, `currency_name`, `description`, `effective_date`, `expiry_date`, `status`) 
    VALUES ('$code','$currency_name','$description','$effective_date','$expiry_date','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-currencies.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
