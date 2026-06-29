<?PHP 
include("../connection.php");
include("header.php");

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC); 
?>



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
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                       <?php 
                        foreach($data as $record) {
                       ?>
                       <tr>
                            <td><?php
                                echo $record['p_id']
                            ?></td>
                             <td><?php
                                echo $record['p_name']
                            ?></td>
                             <td><?php
                                echo $record['p_desc']
                            ?></td>
                             <td>
                                <img src="uploads/<?php echo $record['p_image'] ?>" width="80" alt="" class="img-fluid"> 
                             </td>
                             <td>
                                <?php echo $record['p_price'] ?>
                             </td>
                             <td>
                                 <a href="delete_product.php?id=<?php echo $record['p_id'] ?>">
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                    <a href="update_product.php?id=<?php echo $record['p_id'] ?>">
                                        <button class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                             </td>
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