<?php  

session_start(); 

//Login Validation
if(isset($_SESSION["active_login"])){
    if($_SESSION["active_login"] == "logged_in" ){
        
    }else{
      echo ' <script>window.location.href="controllers/logout.php";</script>';
    }
}else{
        
      echo ' <script>window.location.href="controllers/logout.php";</script>';
    }

?>

<head> 
    
    
        <meta charset="utf-8" />
        <title>Aplimac Pensions Manager</title>
        <!--Prevent Google Bots form indexing the System -->
        <meta name="robots" content="noindex">
    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">z
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="../plugins/cropper/css/cropper.css" rel="stylesheet">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
             <!--Form Wizard-->
        <link rel="stylesheet" href="../plugins/jquery-steps/jquery.steps.css">

        <link href="../plugins/footable/css/footable.bootstrap.css" rel="stylesheet" type="text/css">
        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
      
        <link href="../plugins/dropify/css/dropify.min.css" rel="stylesheet">
    
     
    
        <!-- Plugins ticker -->
        <link href="../plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css" />
    
    
        <!-- Plugins css -->
        <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- Sweet Alert -->
        <link href="../plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/animate/animate.css" rel="stylesheet" type="text/css">
    
         <!-- dropify -->
        
        <link href="../plugins/dropify/css/dropify.min.css" rel="stylesheet">
    
    
        <!-- DataTables -->
        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    
     

        <link href="../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    
    
    </head>