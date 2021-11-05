<?php
if (isset($_POST["submit"]))
{
     
        $file = $_FILES["myfile"]["tmp_name"];
        $file_open = fopen($file, "r");
        while (($csv = fgetcsv($file_open, 1000, ",")) !== false)
        {
            $tradename = $csv[0];
            $legalname = $csv[1]; 
            
            echo "TN:$tradename, LN:$legalname  <br/>";
            // mysql_query("INSERT INTO employee VALUES ('$name','$age','country')");
        }

  
}

 
 
else
{
    echo '<script>alert("No $_POST"); window.location.href="../../memb-buk-emp.php.php"</script>';
}

?>
