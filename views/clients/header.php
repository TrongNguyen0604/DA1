<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Client<?= $title ?? '' ?></title> 
    <link rel="stylesheet" href="css/Styles.css">

</head>

<body>

    <nav>
        <div class="Head">
            <div class="Head_Logo">
                <img src="images/LogoNike1.png" alt="">
            </div>
            <div class="Head_support">
                <ul>
                    <li><a href="">Trang chủ</a></li>|
                    <li><a href="#">Sản phẩm</a></li>|
                    <li><a href="">Join Us</a></li>|
                    <li><a href="">Sign In</a></li>|
                </ul>
            </div>
        </div>
        <!-- Menu  -->
        <div class="Head1">
            <div class="Head1_LogoNike">
                <img src="images/LogoNike.png" alt="">
            </div>

            <div class="Head1_Menu">
                <ul>
                    <li><a href="<?= ROOT_URL ?>">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="#">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $cate): ?>
                                <li>
                                    <a href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>">
                                        <?= $cate['cate_name'] ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Kids</a></li>
                    <li><a href="">Sale</a></li>
                </ul>
            </div>
            <div class="Head1_Icon">
                <div class="Head1_Search">
                    <input type="text">
                </div>
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

        <!-- end menu -->
        <div class="Head2">
            <div class="SlideShow">
                <p>Move, Shop, Customise & Celebrate With Us No matter what you feel
                    <br> like doing today, It’s better as a
                    Member. Join Us
            </div>
            <div class="Join">
                <a href="">Join Us</a>
            </div>
        </div>
    </nav>
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
    
 