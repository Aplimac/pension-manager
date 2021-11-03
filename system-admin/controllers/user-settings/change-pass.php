<?php
session_start();
require ('../../../config/db_config.php');

if (!isset($_POST['submit']))
{
    $current_pass = mysqli_real_escape_string($conn, $_POST['current_pass']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);

    $db_pass = 0;
    $user_email = $_SESSION["user_email"];
    //***********************************************************************************
    

    //query to DB
    $sql = "SELECT * FROM `users` WHERE `user_email`='$user_email' AND `user_password`='$current_pass'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0)
    {

        while ($row = mysqli_fetch_assoc($result))
        {
            $db_pass = $row['user_password'];
        }
    }

    if ($new_pass != $confirm_pass)
    {
     
             $_SESSION['Invalid_password_nomatch'] = true;

    }
    else if ($db_pass != $current_pass){
        
      
             $_SESSION['Invalid_password_wrongpass'] = true; 
        
        
    }else
    {
         $sql = "UPDATE `users` SET `user_password`='$new_pass'  WHERE `user_email` = '$user_email' ";
        $result = mysqli_query($conn, $sql);

        //successmodal alert trigger
        $_SESSION['mod-alt-basic-info-passchange'] = true;

    }

    //route back
    echo '<script> window.location.href = "../../set-profile.php";</script>';

    //*********************************************************************************************
    
}
else
{
    echo '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.php";</script>';
}

exit();

