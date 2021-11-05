<?php 
//add titles to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $title = mysqli_real_escape_string($conn,  $_POST['description']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `titles`(`title`, `code`, `status`) VALUES ('$title','$code','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-titles.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script> window.location.href = "../error.php";</script>';
}

exit();
?>
