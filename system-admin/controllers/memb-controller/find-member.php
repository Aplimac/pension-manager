<?php
//error_reporting(0);
//error_reporting(0);
require('../../../config/db_config.php');
session_start();

if (isset($_POST['submit'])) {
    
  
$ssn_search = mysqli_real_escape_string($conn, $_POST['ssn_search']);
    
$user_flag = 0;  
     
     
//query to DB     
$sql = "SELECT * FROM `members` WHERE `ssn_no` = '$ssn_search'  ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

  
if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
         
       $user_flag = 1;

    }
}
     
   
  if ($user_flag ==1 ){ 
      //session to authenticate populate script
      $_SESSION["memb-memb-found"] = true;
      
      //session for ssn number
      $_SESSION['ssn-for-member'] = "$ssn_search";
      
               echo '<script>window.location.href="../../memb-edit-employee.php"</script>';
    } else {
              echo '<script>window.location.href="../../memb-edit-employee.php"</script>';
  
  }
} else {
  echo '<script> window.location.href="../../index.html"</script>';
}


 
?>