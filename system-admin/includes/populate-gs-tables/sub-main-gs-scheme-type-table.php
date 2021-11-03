<?php 
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `scheme_types` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["scheme_type"].'</td>
                    <td>'.$row["code"].'</td>
                    <td><i class="fa fa-trash text-danger"></i></td>
                </tr>
            ';
        }
    }
?>