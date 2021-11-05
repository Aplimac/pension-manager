<?php 
//add countries to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $telephone = mysqli_real_escape_string($conn,  $_POST['telephone']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `countries`( `country_name`, `code`, `telephone_code`, `status`)
     VALUES ('$country','$code','$telephone','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-countries.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
