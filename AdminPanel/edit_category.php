<?php 
ob_start();
ob_flush();
include("../connection.php");
include("header.php");
$JoIDURLSeArahiHai = $_GET['id'];

$query = "SELECT * FROM category where cate_id = '$JoIDURLSeArahiHai'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($res);

if(isset($_POST['btnEdit'])){
   $name =  $_POST['txtcatename']; // Cotton Boxes
    $updateQuery = "Update category set cate_name = '$name',is_updated = 'Yes' where cate_id = '$JoIDURLSeArahiHai'";
    mysqli_query($conn,$updateQuery);
    header("Location: show_category.php");
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Category</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtcatename" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Category Name" value="<?php echo $data['cate_name'] ?> ">
                                    </div>
                                  
                                </div>
                                
                                
                               <input type="submit" name="btnEdit" value="Edit Category"  class="btn btn-primary btn-user btn-block">
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