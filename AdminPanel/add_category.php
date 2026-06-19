<?php 
include("../connection.php");
include("header.php");

if(isset($_POST['btnAdd'])){
    $name = $_POST['txtcatename']; // Minhaj
    $query = "INSERT INTO category (`cate_name`) VALUES ('$name')";
    mysqli_query($conn,$query);
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
                                <h1 class="h4 text-gray-900 mb-4">Add Category</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="txtcatename" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Category Name">
                                    </div>
                                  
                                </div>
                                
                                
                               <input type="submit" name="btnAdd" value="Add Category"  class="btn btn-primary btn-user btn-block">
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