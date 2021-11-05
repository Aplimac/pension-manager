
<?php 
//add province to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $province = mysqli_real_escape_string($conn,  $_POST['province']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `provinces`( `country_name` , `province` , `code`, `status`)
     VALUES ('$country','$province','$code','$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>  window.location.href = "../../sub-main-gs-provinces.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





