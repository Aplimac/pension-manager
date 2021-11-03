<?php
//Login sessions initialization

session_start();

//For active scheme name
$_SESSION["active_scheme"]  ;

//For login flag() validation)
        $_SESSION["active_login"] = "logged_in";

//User seatils initialization

        //The user ID is sensitive data so we encrypt it using pareto (20:80) 
        $_SESSION["user_id"] = ($userid *20)+80;


        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["fullName"] = $fullname;
        $_SESSION["user_role"] = $user_role;
        $_SESSION["profile_pic"] = $profile_pic;  
        $_SESSION["user_phone"] = $user_phone;
$_SESSION["user_email"] = $user_email;

?>