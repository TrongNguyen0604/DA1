<?php 
include_once ROOT_DIR . "views/clients/header.php";

// Lấy ID danh mục từ URL
$currentCategoryId = $_GET['id'] ?? null;

// Tìm danh mục hiện tại
$currentCategory = null;
foreach ($categories as $cate) {
    if ($cate['id'] == $currentCategoryId) {
        $currentCategory = $cate;
        break;
    }
}
?>

<main>
    <div class="See_What_New">
        <?php if ($currentCategory): ?>
            <!-- Hiển thị tên danh mục -->
            <div class="Main_title">
                <h2><?= $currentCategory['cate_name'] ?></h2>
            </div>
            
            <div class="See_product">
                <!-- Hiển thị sản phẩm thuộc danh mục -->
                <?php foreach ($products as $pro): ?>
                    <?php if ($pro['category_id'] == $currentCategoryId): ?>
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
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Danh mục không tồn tại hoặc không có sản phẩm.</p>
        <?php endif; ?>
    </div>

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
</main>

<?php include_once ROOT_DIR . "views/clients/footer.php"; ?>
