<?PHP 
session_start();
ob_start();
ob_flush();
include("header.php");
if($_SESSION['userrole'] == 1){

}else{
    header("Location: login.php");
}


?>


<?php 
include("footer.php")
?>
<script>
history.pushState(null, null, location.href);

window.onpopstate = function () {
    history.go(1);
};
</script>