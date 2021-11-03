<?php
//################################# Script title Here ###############################

require('');
session_start();

if (isset($_POST['submit']))
{
    include_once ("dbconnection.php");

    $varexapmle1 = mysqli_real_escape_string($conn, $_POST['fueltype']);
    $varexapmle1 = mysqli_real_escape_string($conn, $_POST['poa']);

    $sql = "";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {

            $varexapmle1 = $row['db_attribute1'];
            $varexapmle1 = $row['db_attribute1'];

        }
    }

}
else
{

    echo '<script>window.location.href = "error"</script>';

}

?>
