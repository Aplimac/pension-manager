
<?php 
//add business classes to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $industry = mysqli_real_escape_string($conn,  $_POST['industry']);
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $description = mysqli_real_escape_string($conn,  $_POST['description']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `bussiness_class`(`country_name`, `industry_name`, `code`, `description`, `status`) 
     VALUES ('$country','$industry','$code' ,'$description ' ,'$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script>window.location.href = "../../sub-main-gs-business-classes.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





