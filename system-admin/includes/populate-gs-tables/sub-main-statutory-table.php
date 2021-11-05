<?php 
//get statutory data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `statutory` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["effective_date"].'</td>
                    <td>'.$row["ret_age"].'</td>
                    <td>'.$row["min_comm"].'</td>
                    <td>'.$row["min_annual_pension"].'</td>
                    <td>'.$row["max_tax"].'</td>
                    <td>'.$row["min_additional"].'</td>
                    <td>'.$row["nssa_threshold"].'</td>
                    <td>'.$row["nssa_percentage"].'</td>
                    <td><i id= "'.$row["id"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>