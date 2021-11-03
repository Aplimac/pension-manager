<?php 
require('../config/db_config.php');  

if(isset($_SESSION['populate-emploer-tb'])){
    if($_SESSION['populate-emploer-tb']){
     
        $ssrn; $tradename; $legalname; $vatnumber;
                                            
    $sql = "SELECT * FROM `employers`  ";
    $result = mysqli_query($conn, $sql);
    
        $resultCheck = mysqli_num_rows($result);
     if ($resultCheck > 0)
{

    while ($row = mysqli_fetch_assoc($result))
    {
          
        $ssrn = $row['ssrn'];  
        $tradename = $row['tradename'];  
        $legalname = $row['legalname'];  
        $vatnumber = $row['vatnumber'];  
        
        echo ' <tr>
                    <td>'.$ssrn.'</td>
                    <td>'.$tradename.' </td>
                    <td>'.$legalname.' </td>
                    <td>'.$vatnumber.' </td> 
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
 
        