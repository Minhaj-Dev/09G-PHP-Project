<?php 
include("../connection.php");

$IDURL = $_GET['id'];
$query = "DELETE FROM category where cate_id = '$IDURL'";
mysqli_query($conn,$query);
header("Location: show_category.php");

?>