<?php 
//add scheme-types to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $scheme_type = mysqli_real_escape_string($conn,  $_POST['scheme_name']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `scheme_types`( `scheme_type`, `code`, `status`) VALUES ('$scheme_type','$code','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>window.location.href = "../../sub-main-gs-scheme-types.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
