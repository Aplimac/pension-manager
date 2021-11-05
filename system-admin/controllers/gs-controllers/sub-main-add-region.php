
<?php
//add region to database 
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $region = mysqli_real_escape_string($conn,  $_POST['region']); 
    $description = mysqli_real_escape_string($conn,  $_POST['description']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `regions`( `country_name`, `region`, `code`, `description`, `status`)
     VALUES ('$country','$region','$code', '$description ' ,'$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>  window.location.href = "../../sub-main-gs-regions.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





