<?php 
//add currencies to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $endpoint = mysqli_real_escape_string($conn,  $_POST['endpoint']); 
    $id = mysqli_real_escape_string($conn,  $_POST['id']); 
    $status = false;   
       
     //***********************************************************************************
  
                                            
    $sql ="UPDATE `bussiness_class` SET `status`= 0 WHERE `code` = '$id'";

    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../'.$endpoint.'"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
