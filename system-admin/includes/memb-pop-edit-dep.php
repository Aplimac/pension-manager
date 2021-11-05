<?php
//Populates the add form for dependant
//Populates the edit form for dependant
  require ('../config/db_config.php'); 

if (isset($_SESSION['dep_ssn_no']))
{
    if ($_SESSION['dep_ssn_no'])
    {

        $dep_ssn = $_SESSION['dep_ssn_no'];
        $count_flag = 0;
        $dependant_to;
 
        $ssn_no_dep_to;
        $first_name;
        $lastname;
        $gender; 
        $identity_doc_type; 
        $Id_no; 
        $dob; 
        $rel_to_memeber; 
        $address1; 
        $address2; 
        $address_city; 
        $address_country; 
        $cellno; 
        $email; 
        //***********************************************************************************
        $sql = "SELECT * FROM `dependents` WHERE `id` = '$dep_ssn'";

        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0)
        {

            while ($row = mysqli_fetch_assoc($result))
            {
                $count_flag = 1;
                
                $ssn_no_dep_to = $row['memberssn_fk']; 
                
                //nested loop to search for member details (Name and Surname)
                $sql2 = "SELECT * FROM `members` WHERE `ssn_no` = '$ssn_no_dep_to' ";
                $result2 = mysqli_query($conn, $sql2);

                $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck2 > 0)
                {

                    while ($row2 = mysqli_fetch_assoc($result2))
                    {
                        $dependant_to = $row2['first_name'].' '.$row2['lastname'].' (SSN: '.$row2['ssn_no'].')';
                    }
                }
  
                $first_name = $row['first_name']; 
                $lastname = $row['last_name']; 
                $gender = $row['gender']; 
                $identity_doc_type = $row['id_type']; 
                $Id_no = $row['national_id_no']; 
                $dob = $row['dob']; 
                $rel_to_memeber = $row['re_to_member']; 
                $address1 = $row['address1']; 
                $address2 = $row['address2']; 
                $address_city = $row['city']; 
                $address_country = $row['country']; 
                $cellno = $row['mobile_no']; 
                $email = $row['email']; 

            }
        }

        //*********************************************************************************************
        if($count_flag){
            require('edit-dependant-form.php');            
        }else {
            echo 'Dependant with ref no.('.$dep_ssn.') does not exist!';
        }

        
    }
}
else
{
    echo '<script>alert("<Error>No ROLE set!"); window.location.href = "../../index.php";</script>';
    exit();
}



   
$_SESSION['dep_ssn_no'] = 0; ?>















