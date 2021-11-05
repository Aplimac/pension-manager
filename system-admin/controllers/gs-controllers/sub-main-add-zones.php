
<?php 
//add zones to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $zone = mysqli_real_escape_string($conn,  $_POST['zone']);
    $region = mysqli_real_escape_string($conn,  $_POST['region']); 
    $description = mysqli_real_escape_string($conn,  $_POST['description']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `zones`( `country_name`, `region`, `code`, `zone`, `description`, `status`)
     VALUES ('$country','$region','$code','$zone' , '$description ' ,'$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-zones.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





