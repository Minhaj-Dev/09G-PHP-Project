<?PHP 

include("../connection.php");
include("header.php");

$query = "SELECT * FROM category";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>


    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php 
                                        foreach($data as $record) {
                                        ?>
                                            <tr>
                                                <td>Hello</td>
                                                <td>World</td>
                                            </tr>


                                            <?php 
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




<?php 
include("footer.php")
?>

 <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>