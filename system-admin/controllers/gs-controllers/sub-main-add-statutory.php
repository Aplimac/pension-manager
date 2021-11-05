<?php 
//add statutory to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $effective = mysqli_real_escape_string($conn,  $_POST['effective']); 
    $retirement = mysqli_real_escape_string($conn,  $_POST['retirement']);
    $commutation = mysqli_real_escape_string($conn,  $_POST['commutation']); 
    $pension_annual = mysqli_real_escape_string($conn,  $_POST['pension_annual']);
    $tax = mysqli_real_escape_string($conn,  $_POST['tax']); 
    $additional_award = mysqli_real_escape_string($conn,  $_POST['additional_award']);
    $threshold = mysqli_real_escape_string($conn,  $_POST['threshold']); 
    $percentage = mysqli_real_escape_string($conn,  $_POST['percentage']);
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `statutory`(`effective_date`, `ret_age`, `min_comm`, `min_annual_pension`, `max_tax`, `min_additional`, `nssa_threshold`, `nssa_percentage`, `status`)
     VALUES ('$effective','$retirement','$commutation','$pension_annual','$tax','$additional_award','$threshold','$percentage','$status')";

 
    // $result = mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){

    }else{
        
        echo $sql.'         ERROR '. mysqli_error($conn);
        exit();
    }
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-statutory-req.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
