<?php 
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
     
    $ssn_no = 0; 
    $title = mysqli_real_escape_string($conn,  $_POST['title']);  
    $first_name = mysqli_real_escape_string($conn,  $_POST['first_name']);  
    $lastname = mysqli_real_escape_string($conn,  $_POST['lastname']);  
    $maritalstatus = mysqli_real_escape_string($conn,  $_POST['maritalstatus']);  
    $gender = mysqli_real_escape_string($conn,  $_POST['gender']);  
    $dob = mysqli_real_escape_string($conn,  $_POST['dob']);  
    $nat_id_no = mysqli_real_escape_string($conn,  $_POST['nat_id_no']);  
    $country = mysqli_real_escape_string($conn,  $_POST['countryoo']);    
    $doe = mysqli_real_escape_string($conn,  $_POST['doe']);  
    $current_position = mysqli_real_escape_string($conn,  $_POST['current_position']);  
    $address1 = mysqli_real_escape_string($conn,  $_POST['address1']);  
    $address2 = mysqli_real_escape_string($conn,  $_POST['address2']);  
    $address_city = mysqli_real_escape_string($conn,  $_POST['address_city']); 
    $address_country = mysqli_real_escape_string($conn,  $_POST['address_country']);  
    $telephone = mysqli_real_escape_string($conn,  $_POST['telephone']);   
    $cellno = mysqli_real_escape_string($conn,  $_POST['cellno']);   
    $email = mysqli_real_escape_string($conn,  $_POST['email']);   
    $bank = mysqli_real_escape_string($conn,  $_POST['bank']);   
    $branchname = mysqli_real_escape_string($conn,  $_POST['branchname']);   
    $accno = mysqli_real_escape_string($conn,  $_POST['accno']);   
    $accname = mysqli_real_escape_string($conn,  $_POST['accname']);   
    
     //***********************************************************************************
    
    $sql = "SELECT * FROM `members`";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    
      
   
    
    
        $ssn_no = rand(100,999); 
        $ssn_no .=  '-'.rand(100,999);
   

    if ($resultCheck > 0)
    {

        while ($row = mysqli_fetch_assoc($result))
        {
             
    
            
                
        }
    }
    
      
     $sql ="INSERT INTO `members`( `ssn_no`, `title`, `first_name`, `lastname`, `maritalstatus`, `gender`, `dob`, `nat_id_no`, `countryoforigin`, `doe`, `current_position`, `address1`, `address2`, `address_cityaddress_city`, `address_country`, `telephone`, `cellno`, `email`, `bank`, `branchname`, `accno`, `accname`) VALUES ('$ssn_no','$title','$first_name','$lastname','$maritalstatus','$gender','$dob','$nat_id_no','$country','$doe','$current_position','$address1','$address2','$address_city','$address_country','$telephone','$cellno','$email','$bank','$branchname','$accno','$accname' )";
    
   
    
 
      $result = mysqli_query($conn, $sql);
     
        $_SESSION['modal-trigger-memb-created'] = true;
   
 
     //***********************************************************************************    
                                            
  
    
     echo   '<script>window.location.href = "../../memb-reg-empleoyee.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.html";</script>';
}

exit();
?>
