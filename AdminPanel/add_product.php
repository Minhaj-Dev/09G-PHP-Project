<?PHP 
include("header.php");
include("../connection.php");

$query = "SELECT * FROM category";
$runQuery = mysqli_query($conn,$query);
$data = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);

?>


 <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Product</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtproname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Name">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtprodesc" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Description">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="number" name="txtproprice" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Price">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="file" name="txtproImage" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Name">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                      <select name="" id="" class="form-control">
                                        <?php
                                        foreach($data as $record) {
                                        ?>
                                            <option value=""><?php echo $record['cate_name'] ?></option>
<?php 
                                        }
?>
                                      </select>
                                    </div>
                                  
                                </div>
                                
                                
                               <input type="submit" name="btnAdd" value="Add Product"  class="btn btn-primary btn-user btn-block">
                                <hr>
                               
                               
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php 
include("footer.php")
?>