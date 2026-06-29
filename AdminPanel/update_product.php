<?PHP 
include("header.php");
include("../connection.php");
$idURL = $_GET['id'];
$selectQuery = "SELECT * FROM products where p_id = '$idURL'";
$queryCHalao = mysqli_query($conn,$selectQuery);
$DataForm = mysqli_fetch_assoc($queryCHalao);

$query = "SELECT * FROM category";
$runQuery = mysqli_query($conn,$query);
$data = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);

if(isset($_POST['btnUpdate'])){
    $proDesc = $_POST['txtprodesc'];
    $proPrice = $_POST['txtproprice'];
    $imageInfo = $_FILES['txtproImage'];
    $imageName = $imageInfo['name'];
    $imageTmpName = $imageInfo['tmp_name'];
    $proCategory = $_POST['txtProcate'];
    $proName = $_POST['txtproname'];
    $uniq = uniqid();
    $newImageName = $uniq.$imageName;

    move_uploaded_file($imageTmpName,"uploads/".$newImageName);

$updateQuery = "UPDATE products set p_name = '$proName', p_desc = '$proDesc',p_image= '$newImageName',p_category = '$proCategory',p_price='$proPrice' where p_id = '$idURL'";
mysqli_query($conn,$updateQuery);

}

?>


 <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Product</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtproname" value="<?php echo $DataForm['p_name']?>" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Name">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtprodesc" value="<?php  echo $DataForm['p_desc'] ?>" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Product Description">
                                    </div>
                                  
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="number" name="txtproprice" value="<?php  echo $DataForm['p_price'] ?>" class="form-control form-control-user" id="exampleFirstName"
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
                                      <select name="txtProcate" id="" class="form-control">
                                        <?php
                                        foreach($data as $record) {
                                        ?>
                                            <option value="<?php echo $record['cate_id'] ?>"><?php echo $record['cate_name'] ?></option>
<?php 
                                        }
?>
                                      </select>
                                    </div>
                                  
                                </div>
                                
                                
                               <input type="submit" name="btnUpdate" value="Update Product"  class="btn btn-primary btn-user btn-block">
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