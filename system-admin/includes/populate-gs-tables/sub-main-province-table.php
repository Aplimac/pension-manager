<?php 
//get province data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `provinces` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["country_name"].'</td>
                    <td>'.$row["province"].'</td>
                    <td>'.$row["code"].'</td>
                    <td><i id= "'.$row["id"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>
