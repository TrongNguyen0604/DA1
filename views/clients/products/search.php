<?php 
include_once ROOT_DIR . "views/clients/header.php";
?>

<main>


    <h2>Từ khóa tìm kiếm:<?= $keyword ?></h2>
    <div class="See_What_New">

        <div class="List_products">
                <?php if($products) : ?>
                <!-- Hiển thị tất cả sản phẩm -->
                <?php foreach ($products as $pro): ?>
                    <div class="product">
                        <a style="text-decoration: none; color: inherit; display: block;" href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">
                            <div class="product_img">
                                <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                            </div>
                            <div class="product_Content">
                                <div class="name" style="margin-top:8px">
                                    <h5 class="product-name"><?= $pro['name'] ?></h5>
                                </div>
                                <p>Số lượng còn: <?= $pro['quantity'] ?></p>
                                <div class="price">
                                    <span class="product-price"><?= number_format($pro['price']) ?>₫</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php else : ?>
                <div>Danh muc <strong> <?= $keyword ?></strong> khong co sản phẩm</div>
                <?php endif ?>
            </div>

    </div>

    </main>
        <div class="Member_Benefits">
            <div class="Member_Benefits_title">
                <h2>Member_Benefits</h2>
            </div>
            <div class="Member_Benefits_img">
                <img src="images/Member1.png" alt="">
                <img src="images/Member2.png" alt="">
                <img src="images/Member3.png" alt="">
            </div>
        </div>
   


<?php include_once ROOT_DIR . "views/clients/footer.php"; ?>