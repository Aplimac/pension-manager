<?php
//Populates the view form for dependant



?>

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4>Existing Depandants List</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Ref No.</th>
                        <th>Fisrt Name</th>
                        <th>Second Name</th>
                        <th>Relationship</th> 
                        <th>Dependant to</th> 
                    </tr>
                    </thead>


                    <tbody>
                       <?php
                        $_SESSION['populate-emploer-tb'] = 1;
                        require ("includes/populate-dependants-list.php");

                        ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
