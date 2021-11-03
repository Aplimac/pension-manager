<?php
error_reporting(0);
//error_reporting(0);
require('../../config/db_config.php');

if (isset($_POST['submit'])) {
    
 //Variable Declaration   
$apl_username_login = mysqli_real_escape_string($conn, $_POST['username']);
$apl_password = mysqli_real_escape_string($conn, $_POST['password']);
$user_flag = 0; 
    //Variable declaration (uninitialized)
    $userid;   $fullname;  $first_name;   $last_name; $user_role; $profile_pic; $user_phone; $user_email;
    
//********end variable declaration
     
//query to DB     
$sql = "SELECT * FROM `users` WHERE `user_email`='$apl_username_login' AND `user_password`='$apl_password'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

 
$department;
if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
         $user_flag = 1;
         $userid = $row['id'];
         $first_name = $row['first_name'];
         $last_name =  $row['last_name'];
        $fullname = $row['first_name'].' '. $row['last_name'];
        $user_role = $row['user_role']; 
        $profile_pic  = $row['profile_pic']; 
        $user_phone = $row['user_phone'];
        $user_email = $row['user_email'];

    }
}
    
    
    
  if ($user_flag ==1 ){ 
     require('login_sessions.php');
      $sql = "UPDATE `users` SET `login_status`='1'  WHERE `id` = '$userid' ";
      $result = mysqli_query($conn, $sql);

         echo '<script>window.location.href="../index.html"</script>';
    } else {
        echo '<script>alert("Login Error! Please make sure your login details are correct"); window.location.href="../../index.html"</script>';
    }
} else {
    echo '<script>alert("Login Error! Not Authorized"); window.location.href="../../index.html"</script>';
}


 
?>