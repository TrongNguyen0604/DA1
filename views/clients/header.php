<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Client<?= $title ?? '' ?></title>
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="css/Styles_product.css">
    <link rel="stylesheet" href="css/styles_form.css">
    <link rel="stylesheet" href="css/Styles_product_detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>

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
                    <li><a href="index.php?ctl=login">Contact</a></li>|
                </ul>
            </div>
        </div>
        <!-- Menu  -->
        <div class="Head1">
            <div class="Head1_LogoNike">
                <a href="?ctl=home"><img src="images/LogoNike.png" alt=""></a>

            </div>

            <div class="Head1_Menu">
                <ul>
                    <li style="margin: 10px;"><a href="<?= ROOT_URL ?>">Trang chủ</a></li>
                    <li class="dropdown" style="margin: 10px;">
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
                    <li style="margin: 10px;"><a href="">Kids</a></li>
                    <li style="margin: 10px;"><a href="">Blog</a></li>
                    <li style="margin: 10px;"><a href="">About</a></li>
                  

                </ul>
            </div>
            <form class="d-flex" role="search">
            <div class="Head1_Icon">
                <div class="Head1_Search">
                    <input type="search" class="form-control me-2" placeholder="Search" 
                    aria-label="Search" id="keyword">
                </div>
                <button class="btn btn-outline-succcess" type= "button" id="btnSearch">
                    <i class="fa-solid fa-search"  id="btnSearch"></i> 
                </button>
            </form>
            <div class="Head1_user">
                    <li>
                        <a class="nav-link dropdown-toggle" href="<?= ROOT_URL ?>" role="button" data-bs-togger="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                            <?= $_SESSION['user']['fullname'] ?? '' ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (isset($_SESSION['user'])) : ?>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL ?>">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=list-order' ?>">Lịch sử đơn hàng</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=logout' ?>">Logout</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=login' ?>">Đăng nhập</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=register' ?>">Đăng ký</a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </li>
            </div>
                <!-- icon giỏ hàng  -->
                <a href="<?= ROOT_URL . '?ctl=view-cart' ?>">
                    <i class="fa-solid fa-cart-shopping">(<?= $_SESSION['totalQuantity'] ?? '0' ?>)</i>
                </a>
            </div>
            
        </div>

       
        <div class="head2">
            <div class="slideshow-container">
                <div class="slide fade">
                    <p>Move, Shop, Customise & Celebrate With Us. No matter what you feel<br>
                        like doing today, it’s better as a Member. Join Us.
                    </p>
                </div>
                <div class="slide fade">
                    <p>Enjoy Exclusive Offers, Early Access, and Rewards Be a part of .<br>
                        Something bigger. Join Us Today.
                    </p>
                </div>
                <div class="slide fade">
                    <p>Be a part of something bigger. Join Us Today.<br> 
                    Early Access             
                    </p>
                </div>
                <!-- Bạn có thể thêm slide mới ở đây -->
            </div>
            <div class="dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        

    <script>
            let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 1500); // Thời gian chuyển slide (3000ms = 3 giây)
        }

        function currentSlide(n) {
            slideIndex = n - 1;
            showSlides();
        }

    </script>
    </nav>
