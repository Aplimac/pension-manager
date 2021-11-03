
<?php
//to trigger edit dependant details' require on Depandant page (after User Clicks Add Dependant Pallet)

session_start(); 

//Login Validation
if(isset($_SESSION["active_login"])){
    if($_SESSION["active_login"] == "logged_in" ){
        
        $_SESSION['dep_ssn_no'] =     $_POST['dep_ssn_no'] ;   
         
        $_SESSION['dependants-pop-edit'] = 1;
        echo ' <script>window.location.href="../../memb-dependants.php";</script>';
        exit();         
        
    }else{
      echo ' <script>window.location.href="../../controllers/logout.php";</script>';
        exit();   
        
    }
}else{
        
      echo ' <script>window.location.href="../../controllers/logout.php";</script>';
        exit();   
    }

?>