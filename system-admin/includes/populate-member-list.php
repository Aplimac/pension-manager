<?php 
require('../config/db_config.php');  

if(isset($_SESSION['populate-emploer-tb'])){
    if($_SESSION['populate-emploer-tb']){
     
        $ssrn; $tradename; $legalname; $vatnumber;
                                            
    $sql = "SELECT * FROM `members`  ";
    $result = mysqli_query($conn, $sql);
    
        $resultCheck = mysqli_num_rows($result);
     if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
          
        $ssn_no = $row['ssn_no'];  
        $first_name = $row['first_name'];  
        $lastname = $row['lastname'];  
        $nat_id_no = $row['nat_id_no'];  
        
        echo ' <tr>
                    <td>'.$ssn_no.'</td>
                    <td>'.$first_name.' </td>
                    <td>'.$lastname.' </td>
                    <td>'.$nat_id_no.' </td> 
                </tr>
                ';

    }
}
    
       
        
    //*********************************************************************************************
    
    


}}
    else{
    echo   '<script>alert("<Error 99>Unathorized!"); window.location.href = "index.html";</script>';
        exit();
}

?>
 
        