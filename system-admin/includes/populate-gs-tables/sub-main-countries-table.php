<?php 
//get countries data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `countries` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["country_name"].'</td>
                    <td>'.$row["code"].'</td>
                    <td>'.$row["telephone_code"].'</td>
                    <td><i id= "'.$row["id"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>