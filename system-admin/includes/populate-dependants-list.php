<?php
require ('../config/db_config.php');

if (isset($_SESSION['populate-emploer-tb']))
{
    if ($_SESSION['populate-emploer-tb'])
    {

        $id;
        $member_ssn;
        $tradename;
        $legalname;
        $vatnumber; 
        $dependant_to;

        $sql = "SELECT * FROM `dependents`  ";
        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0)
        { 
            while ($row = mysqli_fetch_assoc($result))
            {
                $member_ssn = $row['memberssn_fk'];
                
                //nested loop to search for member details
                $sql2 = "SELECT * FROM `members` WHERE `ssn_no` = '$member_ssn' ";
                $result2 = mysqli_query($conn, $sql2);

                $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck2 > 0)
                {

                    while ($row2 = mysqli_fetch_assoc($result2))
                    {
                        $dependant_to = $row2['first_name'].' '.$row2['lastname'].' ('.$row2['ssn_no'].')';
                    }
                }

                        $id = $row['id'];
                        $first_name = $row['first_name'];
                        $lastname = $row['last_name'];
                        $relatioship = $row['re_to_member'];

                        echo ' <tr>
                    <td>' . $id . '</td>
                    <td>' . $first_name . ' </td>
                    <td>' . $lastname . ' </td>
                    <td>' . $relatioship . ' </td> 
                    <td>' . $dependant_to . ' </td> 
                </tr>
                ';

                    }
                }

                //*********************************************************************************************
                

                
            }
        }
        else
        {
            echo '<script>alert("<Error 99>Unathorized!"); window.location.href = "index.html";</script>';
            exit();
        }

?>
