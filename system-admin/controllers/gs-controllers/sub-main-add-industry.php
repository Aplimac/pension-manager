
<?php 
//add industry to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $country = mysqli_real_escape_string($conn,  $_POST['country']); 
    $industry = mysqli_real_escape_string($conn,  $_POST['industry']);
    $description = mysqli_real_escape_string($conn,  $_POST['description']);
    $rate = mysqli_real_escape_string($conn,  $_POST['rate']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $date = mysqli_real_escape_string($conn,  $_POST['date']);
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO`industry`(`country_name`, `industry_name`, `code`, `description`, `rate`, `industry_date`, `status`)
     VALUES ('$country', '$industry','$code', '$description', '$rate', '$date', '$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-industries.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





