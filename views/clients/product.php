<header>
        <div class="header_banner">
            <img src="images/banner.png" alt="">
        </div>
        <div class="header_title">
            <p>Nike Running</p>
            <h1>WINNING ISN’T COMFORTABLE</h1>
            <p>Tincidunt at mi sit risus fermentum risus ac neT est feugiat congue </p>
        </div>
        <div class="header_button">
            <button>Shop Running</button>
        </div>
    </header>

<main>
    <div class="Featured">
        <!-- <div class="Main_title">
            <h2>Featured</h2>
        </div> -->
        <div class="Main_Image">
            <img src="Image/Featured1.png" alt="">
            <img src="Image/Featured2.png" alt="">
            <img src="Image/Featured3.png" alt="">
        </div>
    </div>
    <div class="See_What_New">

        <div class="Main_title">
            <h2>See What's New</h2>
        </div>
        <div class="See_product">
            <?php foreach ($list_products as $pro) : ?>         
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
                        <div class="price">
                            <span class="product-price"><?= number_format($pro['price']) ?>₫</span>
                        </div>
                    </div>
                </a>    
                </div>
                
            <?php endforeach ?>
        </div>

        
    </div>
</main>