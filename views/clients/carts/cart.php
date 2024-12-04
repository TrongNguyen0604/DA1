<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<main>
    <form action="<?= ROOT_URL . '?ctl=update-cart'?>" method="POST">
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
                            <div class="main_information_button_1">
                                <input type="number" min='1' class="main_information_button_center" name="quantity[<?= $id?>]" value="<?= $cart['quantity'] ?>">
                            </div>
                        </div>
                        <h3>Tổng:<?= $cart['price'] * $cart['quantity'] ?>₫</h3>
                    </div>
                    <a style="margin-left:140px" href="<?= ROOT_URL . '?ctl=delete-cart&id=' . $id?>">
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
           



        </div>
        <div class="main_pay">
            <div class="main_pay_total_price">
                <p>Tổng tiền giỏ hàng:  </p>
                <h2><?= number_format($totalPriceOder) ?>₫</h2>
            </div>
            <div class="main_pay_button">
                <button><a style="text-decoration:none;color:white" href="<?= ROOT_URL ?>">Tiếp tục mua hàng</a></button>
                <button type="submit">Cập nhật giỏ hàng</button>
                <button><a style="text-decoration:none;color:white" href="<?= ROOT_URL . '?ctl=view-checkout' ?>">Thanh toán</a></button>
            </div>
        </div>
    </form>
        


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