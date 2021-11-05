
<?php 
//add city to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $city = mysqli_real_escape_string($conn,  $_POST['city']);
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `city`( `city_name`, `country_name`,`code`, `status`)
     VALUES ('$city', '$country','$code' ,'$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>  window.location.href = "../../sub-main-gs-cities.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





