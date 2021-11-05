<?php 
//get business classes data from database
     require_once("../config/db_config.php");
                                    
    $sql    = "SELECT * FROM `bussiness_class` WHERE `status`= 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo'
                <tr>
                    <td>'.$row["country_name"].'</td>
                    <td>'.$row["industry_name"].'</td>
                    <td>'.$row["code"].'</td>
                    <td>'.$row["description"].'</td>
                    <td><i id= "'.$row["code"].'" class="fa fa-trash text-danger" onclick = "clickedIcon(this.id);"></i></td>
                </tr>
            ';
        }
    }
?>
