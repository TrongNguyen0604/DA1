<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<main>
<div class="See_What_New">

    <div class="Main_title">
        <h2>Giày Jordan 1</h2>
    </div>
    <div class="See_product">
        <?php foreach ($products as $pro) : ?>

            <div class="product">
                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">
                    <div class="product_img">
                        <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                    </div>
                    <div class="product_Content">
                        <div class="name">
                            <h5 class="product-name"><?= $pro['name'] ?></h5>
                        </div>
                        <p>
                            Women's Shoes
                        </p>
                        <div class="price">
                            <span class="product-price"><?= $pro['price'] ?></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>


</div>

        <div class="Member_Benefits">
            <div class="Member_Benefits_title">
                <h2>Member_Benefits</h2>
            </div>
            <div class="Member_Benefits_img">
                <img src="Image/Member1.png" alt="">
                <img src="Image/Member2.png" alt="">
                <img src="Image/Member3.png" alt="">
            </div>
        </div> 
</main>


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>