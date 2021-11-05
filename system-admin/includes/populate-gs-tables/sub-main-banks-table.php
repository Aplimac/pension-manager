<?php 
//get banks data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `banks` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["bank_name"].'</td>
                    <td>'.$row["bank_code"].'</td>
                    <td><i id= "'.$row["bank_code"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>