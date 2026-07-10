<?php 
include("header.php");
include("../connection.php");

$query = "SELECT * FROM products inner join category on cate_id=p_category;
";
$execute = mysqli_query($conn,$query);
$data = mysqli_fetch_all($execute,MYSQLI_ASSOC);


?>



    <!--Tranding product-->
    <section class="pt-60 pb-30 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h2>Tranding Products</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

            <?php 
                foreach($data as $product) {
            ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-tranding">
                        <a href="details.php?id=<?php echo $product['p_id'] ?>">
                            <div class="tranding-pro-img">
                                <img src="../AdminPanel/uploads/<?php echo $product['p_image'] ?>" alt="">
                            </div>
                            <div class="tranding-pro-title">
                                <h3><?php echo $product['p_name'] ?></h3>
                                <h4><?php echo $product['cate_name'] ?></h4>
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">
                                        $<?php echo $product['p_price'] ?>
                                    </span>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <?php 
                }
                ?>
             
            </div>
        </div>
    </section><!--Tranding product-->

<?php 
include("footer.php");
?>