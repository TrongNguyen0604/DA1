<?php include_once ROOT_DIR . "views/clients/header.php" ?>


<main>
        <div class="main_product">
            <div class="main_product_small">
                <img src="Image/Air1.png" alt="">
                <img src="Image/Air2.png" alt="">
                <img src="Image/Air3.png" alt="">
                <img src="Image/Air4.png" alt="">
                <img src="Image/Air5.png" alt="">
            </div>
            <div class="main_product_Air">
                <img src="<?= 'images/' . $product['image'] ?>" alt="">
            </div>
            <div class="main_product_information">
                <div class="main_product_information_title">
                    <h1><?= $product['name'] ?></h1>
                </div>
                <div class="main_product_information_content">
                    <!-- <p>Men's Shoes</p>
                    <p>$4,150/ Approx. ₫103,067,180</p>
                    <p>Color: Black</p>
                    <p>Size: One Size</p> -->
                    <p><?= $product['quantity'] ? 'Còn hàng' : 'Hết hàng' ?></p>
                    <p class="product-price"><?= number_format($product['price']) ?>₫</p>
                    <p><strong>Số lượng còn:</strong><?= $product['quantity'] ?></p>
                    <p>Size: One Size</p>
                </div>
                <div class="main_product_information_size">
                    <button>FR34</button>
                    <button>FR35</button>
                    <button>FR36</button>
                    <button>FR37</button>
                    <button>FR38</button>
                    <button>FR39</button>
                    <button>FR40</button>
                </div>
                <div class="main_product_information_button">
                    <button>Mua hàng</button>
                </div>
                <div class="main_product_information_button">
                    <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">
                        <button><i class="fa-regular fa-heart"></i>Thêm vào giỏ hàng</button>
                    </a>
                </div>
                <div class="main_product_information_Notes">
                    <h5>Mô tả</h5>
                    <p><?= $product['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="main_product_how">
            <div class="main_product_how_title">
                <h1>How Others Are Wearing It</h1>
                <p>Upload your photo or mention @Nike on Instagram for a chance to be featured.</p>
            </div>
            <div class="main_product_how_more">
                <img src="images/How.png" alt="">
                <button><i class="fa-solid fa-circle-plus h"></i></button>
            </div>
        </div>
        <div class="Customer">
            <div class="Customer_title">
                <h1>Customer feedback</h1>
                <div class="Customer_feedback_link">
                    <ul>
                        <li>
                            <a href="Comments_page.html">Xem thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Customer_feedback">
                <div class="Customer_feedback_1">
                    <div class="Customer_feedback_content1">
                        <i class="fa-solid fa-location-pin"></i>
                        <i class="fa-solid fa-location-pin"></i>
                        <i class="fa-solid fa-location-pin"></i>
                        <p>Lorem ipsum dolor sit amet consectetur. Mauris sed eleifend fermen
                            <br> fermentum sed eleifend fermen fermentum.
                        </p>
                    </div>
                    <div class="Customer_feedback_content2">
                        <div class="Customer_feedback_content2_img">
                            <img src="images/customer.png" alt="">
                        </div>
                        <div class="Customer_feedback_content2_information">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>Mỹ Linh</p>
                            <p class="Customer_feedback_content2_information_p">Amet consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="Customer_feedback_2">
                    <div class="Customer_feedback_content1">
                        <i class="fa-solid fa-location-pin"></i>
                        <i class="fa-solid fa-location-pin"></i>
                        <i class="fa-solid fa-location-pin"></i>
                        <p>Lorem ipsum dolor sit amet consectetur. Mauris sed eleifend fermen
                            <br> fermentum sed eleifend fermen fermentum.
                        </p>
                    </div>
                    <div class="Customer_feedback_content2">
                        <div class="Customer_feedback_content2_img">
                            <img src="images/customer1.png" alt="">
                        </div>
                        <div class="Customer_feedback_content2_information">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>Mỹ Trang</p>
                            <p class="Customer_feedback_content2_information_p">Amet consectetur</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>



<?php include_once ROOT_DIR . "views/clients/footer.php" ?>

