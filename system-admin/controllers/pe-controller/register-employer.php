<?php 
require('../../../config/db_config.php');
session_start();

if(!isset($_POST['submit'])){
    $ssrn; 
    
    $tradename = mysqli_real_escape_string($conn,  $_POST['tradename']); 
    $legalname = mysqli_real_escape_string($conn,  $_POST['legalname']); 
    $vatnumber = mysqli_real_escape_string($conn,  $_POST['vatnumber']); 
    $patnumber = mysqli_real_escape_string($conn,  $_POST['patnumber']); 
    $industry = mysqli_real_escape_string($conn,  $_POST['industry']); 
    $regdate = mysqli_real_escape_string($conn,  $_POST['regdate']); 
    $tradecomdate = mysqli_real_escape_string($conn,  $_POST['tradecomdate']); 
    $holdingcomp = mysqli_real_escape_string($conn,  $_POST['holdingcomp']); 
    $companysize = mysqli_real_escape_string($conn,  $_POST['companysize']); 
    $telephone = mysqli_real_escape_string($conn,  $_POST['telephone']); 
    $cellnumber = mysqli_real_escape_string($conn,  $_POST['cellnumber']); 
    $address1 = mysqli_real_escape_string($conn,  $_POST['address1']);  
    $address2 = mysqli_real_escape_string($conn,  $_POST['address2']);  
    $city = mysqli_real_escape_string($conn,  $_POST['city']);  
    $country = mysqli_real_escape_string($conn,  $_POST['country']);  
    $accname = mysqli_real_escape_string($conn,  $_POST['accname']);   
    $accno = mysqli_real_escape_string($conn,  $_POST['accno']);   
    $bank = mysqli_real_escape_string($conn,  $_POST['bank']);   
    $branchname = mysqli_real_escape_string($conn,  $_POST['branchname']);    
    
    //generating ssn no    
    $ssrn = rand(100,999); 
    $ssrn .=  '-'.rand(100,999);
    
     //***********************************************************************************
     
                                            
    $sql = "INSERT INTO `employers`(  `ssrn`, `tradename`, `legalname`, `vatnumber`, `patnumber`, `industry`, `regdate`, `tradecomdate`, `holdingcomp`, `companysize`, `telephone`, `cellnumber`, `address1`, `address2`, `city`, `country`, `accname`, `accno`, `bank`, `branchname`) VALUES ('$ssrn' ,'$tradename', '$legalname', '$vatnumber', '$patnumber', '$industry', '$regdate', '$tradecomdate', '$holdingcomp', '$companysize', '$telephone', '$cellnumber', '$address1', '$address2', '$city', '$country', '$accname', '$accno', '$bank', '$branchname' )";
    
 
      $result = mysqli_query($conn, $sql);
     
        $_SESSION['modal-trigger-emp-created'] = true;
    
        echo   '<script>window.location.href = "../../pe-tl-register-employers.php"; </script>';
      
    //*********************************************************************************************
    
    


}else{
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../error.php";</script>';
}

exit();
?>
