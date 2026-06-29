<?php 
include("../connection.php");

$IDURL = $_GET['id'];
$selectQuery = "SELECT * FROM products where p_id = '$IDURL'";
$queryRun = mysqli_query($conn,$selectQuery);
$fetchRecord = mysqli_fetch_assoc($queryRun);
$imagePath = "uploads/".$fetchRecord['p_image'];

unlink($imagePath);

$query = "DELETE FROM products where p_id = '$IDURL'";
$result = mysqli_query($conn,$query);


header("Location: show_products.php");

?>