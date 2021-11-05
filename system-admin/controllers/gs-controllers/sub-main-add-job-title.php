
<?php 
//add job title to database
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
 
    $title = mysqli_real_escape_string($conn,  $_POST['title']); 
    $code = mysqli_real_escape_string($conn,  $_POST['code']);
    $description = mysqli_real_escape_string($conn,  $_POST['description']); 
    $status = true;
       
     //***********************************************************************************
  
                                            
    $sql ="INSERT INTO `job_titles`(`name_of_title`, `code`, `description`, `status`)
     VALUES ('$title','$code' ,'$description ' ,'$status')";

 
    $result = mysqli_query($conn, $sql);
  
    // $_SESSION['modal-trigger-emp-updated'] = true;
    
    echo   '<script> window.location.href = "../../sub-main-gs-job-titles.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>





