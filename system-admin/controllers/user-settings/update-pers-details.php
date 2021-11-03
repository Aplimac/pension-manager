<?php

session_start();
require('../../../config/db_config.php');

if (!isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']); 
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_phone = mysqli_real_escape_string($conn, $_POST['user_phone']);  
    //***********************************************************************************
    
   

    $sql = "UPDATE `users` SET `first_name`='$first_name' , `user_phone` = '$user_phone' ,  `last_name`='$last_name' WHERE `user_email` = '$email' ";
    
    $result = mysqli_query($conn, $sql);

    //successmodal alert trigger
    $_SESSION['mod-alt-basic-info-updated'] = true; 
    
    //re initialize the global session variables    
        $_SESSION["user_phone"] = $user_phone;
      $_SESSION["first_name"] = $first_name;   
        $_SESSION["last_name"] = $last_name;
        $_SESSION["fullName"] = $first_name.' '.$last_name;
    
    //route back
     echo   '<script> window.location.href = "../../set-profile.php";</script>';
      
    //*********************************************************************************************
} else {
    echo   '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.php";</script>';
}

exit();
