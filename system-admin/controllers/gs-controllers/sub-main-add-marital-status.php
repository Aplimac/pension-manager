<?php 
//add marital statuses to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $marital_status = mysqli_real_escape_string($conn,  $_POST['marital_status']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `marital_status`(`status_name`, `status`) VALUES ('$marital_status','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>  window.location.href = "../../sub-main-gs-marital-status.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
