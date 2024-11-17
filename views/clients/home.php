<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="See_What_New">
            <div class="See_product">
        
                <?php foreach ($list_products as $pro) : ?>
                    <!-- Box Sản Phẩm -->
                    <div class="col-md-3">
                        <div class="product-box">
                            <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                            <div class="product-info">
                                <a href="#">
                                    <h5 class="product-name"><?= $pro['name'] ?></h5>
                                </a>
                                <div>
                                    <span class="product-price"><?= $pro['price'] ?></span>

                                </div>
                                <div class="product-buttons">

                                    <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
    
            </div>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>