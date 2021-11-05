<?php
require ('../../../config/db_config.php');
session_start();

if (!isset($_POST['submit']))
{
 
    $ssn_no = mysqli_real_escape_string($conn, $_POST['ssn_no']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $identity_doc_type = mysqli_real_escape_string($conn, $_POST['identity_doc_type']);
    $Id_no = mysqli_real_escape_string($conn, $_POST['Id_no']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $rel_to_memeber = mysqli_real_escape_string($conn, $_POST['rel_to_memeber']);
    $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
    $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
    $address_city = mysqli_real_escape_string($conn, $_POST['address_city']);
    $address_country = mysqli_real_escape_string($conn, $_POST['address_country']);
    $cellno = mysqli_real_escape_string($conn, $_POST['cellno']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //***********************************************************************************
    $sql = "SELECT * FROM `members`";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0)
    {

        while ($row = mysqli_fetch_assoc($result))
        {

        }
    }

    $sql = "INSERT INTO `dependents`(  `memberssn_fk`,  `first_name`, `last_name`, `id_type`,`national_id_no`, `dob`, `gender` , `re_to_member`,   `address1`, `address2`, `city`, `country`, `mobile_no`, `email`) VALUES ( '$ssn_no','$first_name','$lastname','$identity_doc_type','$Id_no','$dob','$gender', '$rel_to_memeber','$address1','$address2','$address_city','$address_country' ,'$cellno'  ,'$email'  )";
    
       

    $result = mysqli_query($conn, $sql);
    
    //to trigger confirmation modal
    $_SESSION['modal-trigger-dependant-created'] = true;

    //***********************************************************************************
    

    echo '<script>window.location.href = "../../memb-dependants.php"; </script>';

    //*********************************************************************************************
    

    
}
else
{
    echo '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.html";</script>';
}

exit();
?>





