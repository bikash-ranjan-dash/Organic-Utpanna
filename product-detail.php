<?php include('./views/header.php') ?>
<?php include('./controller/singleDetailCtrl.php') ?>
<div id="cart-message"></div>
<section class="single-product-details">
        <div class="container product-detail">
            <div class="row">
                <div class="col-md-6 single-product-details-img">
                    <img src="./img/<?php echo $viewProduct[0]['item_image'] ?>" alt="">
                </div>
                <div class="col-md-6 single-product-details-content">
                    <div>
                <h6><?php echo $viewProduct[0]['category'] ?></h6>
                <h2><?php echo $viewProduct[0]['item_name'] ?></h2>
                <h5>Size: <?php echo $viewProduct[0]['size'] ?></h5>
                <h1><?php echo $viewProduct[0]['price'] ?>/-</h1>
                <h3>How To Use</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem maiores sed id, facilis quae temporibus quaerat in amet tempore aut sunt vitae, obcaecati similique? Deserunt aliquam dicta iusto blanditiis consequuntur.</p>
                <div class="add-to-cart-form">
                    <input type="hidden" class="pid" value="<?php echo $viewProduct[0]['id'] ?>">
                    <input type="hidden" class="pname" value="<?php echo $viewProduct[0]['item_name'] ?>">
                    <input type="hidden" class="pimage" value="./img/<?php echo $viewProduct[0]['item_image'] ?>">
                    <input type="hidden" class="pprice" value="<?php echo $viewProduct[0]['price'] ?>">
                    <input type="hidden" class="psize" value="<?php echo $viewProduct[0]['size'] ?>">
                    <button  class="add-to-cart">Add To Cart</button>
                </div>
            </div>
            <div class="heart">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            </div>
            </div>
        </div>
    </section>

<?php include('./views/footer.php') ?>