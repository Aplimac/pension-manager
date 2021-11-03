<?php 
session_start();

$_SESSION["active_scheme"] = $_POST['scheme_name'] ;

$_SESSION['scheme_sel_success'] = true;
echo '<script> window.location.href="../main-select-scheme.php"</script>';


exit();


?>