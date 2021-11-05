<?php

//Include to poplatew the members for select(name="ssn_no") on add dependant
require_once('../config/db_config.php');

$sql = "SELECT * FROM `members` ";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
        
    {
        $ssn_no = $row["ssn_no"];
        $member_full_name =  $row["first_name"].' '.$row["lastname"];
        
        
        echo ' <option value="'.$ssn_no.'">'.$member_full_name.' (SSN: '.$ssn_no.')</option>';
    }
}

?>
