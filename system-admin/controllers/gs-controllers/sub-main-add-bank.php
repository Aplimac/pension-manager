<?php 
//add banks to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $bank = mysqli_real_escape_string($conn,  $_POST['banks']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `banks`(`bank_name`,`bank_code`, `status`) VALUES ('$bank', '$code', '$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-banks.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
