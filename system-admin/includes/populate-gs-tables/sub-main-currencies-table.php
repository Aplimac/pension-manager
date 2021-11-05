<?php 
//get currencies data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `currencies` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["code"].'</td>
                    <td>'.$row["currency_name"].'</td>
                    <td>'.$row["description"].'</td>
                    <td>'.$row["effective_date"].'</td>
                    <td>'.$row["expiry_date"].'</td>
                    <td><i id= "'.$row["id"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>