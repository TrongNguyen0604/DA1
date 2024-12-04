<?php 
include_once ROOT_DIR . "views/clients/header.php";
?>

<main>
            <div class="List_products">
                <?php foreach ($products as $pro) : ?>
                    <div class="product">
                    <a style="text-decoration: none; color: inherit; display: block;" href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">
                        <div class="product_img">
                            <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                        </div>
                        <div class="product_Content">
                            <div class="name">
                                <h5 class="product-name"><?= $pro['name'] ?></h5>
                            </div>
                            <p>Số lượng còn: <?= $pro['quantity'] ?></p>
                            <!-- <h6>size: 37 | color: White</h6> -->
                            <div class="price">
                            <span class="product-price"><?= number_format($pro['price']) ?>₫</span>
                            </div>
                        </div>
                        </a>  
                    </div>                   
                <?php endforeach ?>
             </div>
    </main>
    <!-- Lợi ích thành viên -->
    <div class="Member_Benefits">
        <div class="Member_Benefits_title">
            <h2>Member Benefits</h2>
        </div>
        <div class="Member_Benefits_img">
            <img src="images/Member1.png" alt="Benefit 1">
            <img src="images/Member2.png" alt="Benefit 2">
            <img src="images/Member3.png" alt="Benefit 3">
        </div>
    </div> 


<?php include_once ROOT_DIR . "views/clients/footer.php"; ?>