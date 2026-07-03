<?php
include("../connection.php");
if(isset($_POST['btnLogin'])){

    $email = $_POST['txtemail']; 
    $pass = $_POST['txtpass'];
    
    $emailCHeckQuery = "SELECT * FROM users where user_email = '$email'"; //abc@gmail.com
    $runQuery = mysqli_query($conn,$emailCHeckQuery);
    $numberOfRecords = mysqli_num_rows($runQuery); //0

    if($numberOfRecords>0){
        echo "Your Email Found You can login";
    }else{
        echo "No Email Found First Register yourself";
    }
       


}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Account!</h1>
                            </div>
                            <form class="user" method="post">
                                
                                <div class="form-group">
                                    <input type="email" name="txtemail" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="password" name="txtpass" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                   
                                </div>
                              <input type="submit" value="Login Account!" class="btn btn-primary btn-user btn-block" name="btnLogin">
                                
                              
                              
                            </form>
                            <hr>
                          
                            <div class="text-center">
                                <a class="small" href="register.php">Dont Have An Account? Signup Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>