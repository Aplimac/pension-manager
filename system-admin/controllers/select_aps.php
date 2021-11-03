<?php 
if(isset($_POST['submit'])){
    include('../../config/db_config.php');
    $reg_no = $_POST['reg_no'];
    $stmt = $conn->prepare("SELECT scheme_name, reg_no FROM scheme WHERE reg_no = ?");
    if($stmt){
        $row = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        session_start();
        $_SESSION["active_scheme"] = $row['schema_name'];
        $stmt->execute();
        $result = $stmt->get_result();
        
        exit(json_encode($row));
    }

}


echo '<script>window.location.href="../main-select-scheme.php"</script>';

?>