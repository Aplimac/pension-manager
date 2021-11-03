<?php
//to trigger add dependant's require on Depandant page (after User Clicks Add Dependant Pallet)

session_start(); 

//Login Validation
if(isset($_SESSION["active_login"])){
    if($_SESSION["active_login"] == "logged_in" ){
         
        $_SESSION['dependants-pop-add'] = 1;
        echo ' <script>window.location.href="../../memb-dependants.php";</script>';
         
    }else{
      echo ' <script>window.location.href="../../controllers/logout.php";</script>';
    }
}else{
        
      echo ' <script>window.location.href="../../controllers/logout.php";</script>';
    }

?>