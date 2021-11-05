<?php 
//add banks branch to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $bank = mysqli_real_escape_string($conn,  $_POST['banks']); 
    $branch = mysqli_real_escape_string($conn,  $_POST['branch']);
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `bank_branch`(`bank_name`,`branch_name`, `status`) VALUES ('$bank', '$branch', '$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-bank-branches.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
