<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<main>
        <div class="main_all">

            <div class="Main_title">
                <p>Jordan / Shose / Jorhan 1</p>
                <div class="Main_title_1">

                    <div class="Main_title_1_h2">
                        <h2>Nike Air Force 1 ‘07</h2>
                    </div>

                    <div class="Main_title_1_p">
                        <p>Show Filters | Sort By <i class="fa-solid fa-angle-down"></i></p>

                    </div>

                </div>
            </div>
            <div class="main_general">
                <?php foreach($carts as $id => $cart) : ?>
                <div class="main">
                    <div class="main_img">
                        <img src="images/<?= $cart['image'] ?>" alt="">
                    </div>
                    <div class="main_information">
                        <br>
                        <h2><?= $cart['name'] ?></h2>
                        <p></p>
                        <h4>Size: One Size</h4>
                        <div class="main_information_price">
                            <!-- <del>3,959,000₫</del> -->
                            <h4><?= $cart['price'] ?>₫</h4>
                        </div>
                        <div class="main_information_button">
                            <button class="main_information_button_side"><i class="fa-solid fa-minus"></i></button>
                            <div class="main_information_button_1">
                                <input type="number" min='1' class="main_information_button_center" name="quantity[<?= $id?>]" value="<?= $cart['quantity'] ?>">
                            </div>
                            <button class="main_information_button_side"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                    <a href="<?= ROOT_URL . '?ctl=delete-cart&id=' . $id?>">
                        <i class="fa-solid fa-xmark "></i>
                    </a>
                </div>
                <?php endforeach ?>
                <!-- <div class="main_vocher">
                    <h2>Apply Vocher</h2>
                    <input type="text" placeholder="Nhập mã giảm giá">
                    <h4>Phiếu giảm giá của Shop</h4>
                    <p>Giảm 15% tổng đơn hàng nếu mua 3 đơn trở lên <input type="radio" name="discount" id="discount15">
                    </p>
                    <p>Giảm 25% tổng đơn hàng nếu mua 5 đơn trở lên <input type="radio" name="discount" id="discount25">
                    </p>

                </div> -->
            </div>
            <!-- <div class="main_general">
                <div class="main">
                    <div class="main_img">
                        <img src="Image/nike1.png" alt="">
                    </div>
                    <div class="main_information">
                        <h2>Air Johan 1 Low</h2>
                        <p>Varius potenti consequat a quis interdum. Vitae purus quis congue semper lacinia pharetra

                            Purus aenean suspendisse suscipit. Fermentum nec tortor tempor morbi eget ut. </p>
                        <h4>Size: One Size</h4>
                        <div class="main_information_price">
                            <del>3,959,000₫</del>
                            <h4>1,959,000₫</h4>
                        </div>
                        <div class="main_information_button">
                            <button class="main_information_button_side"><i class="fa-solid fa-minus"></i></button>
                            <div class="main_information_button_1">
                                <button class="main_information_button_center">2</button>
                            </div>
                            <button class="main_information_button_side"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                    <i class="fa-solid fa-xmark iconx"></i>
                </div>
                <div></div>
            </div> -->



        </div>
        <div class="main_pay">
            <div class="main_pay_total_price">
                <p>Tổng giá (sản phẩm)  </p>
                <h2><?= number_format($totalPriceOder) ?>₫</h2>
            </div>
            <div class="main_pay_button">
                <button>Tiếp tục mua hàng</button>
                <button>Thanh toán</button>
            </div>
        </div>


        <!-- 
        <div class="Member_Benefits">
            <div class="Member_Benefits_title">
                <h2>Member_Benefits</h2>
            </div>
            <div class="Member_Benefits_img">
                <img src="Image/Member1.png" alt="">
                <img src="Image/Member2.png" alt="">
                <img src="Image/Member3.png" alt="">
            </div>
        </div> -->
    </main>


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>