<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Styles.css">
</head>
<style>
    .Main_images{
        text-align: center;
    }
    .Main_images img{
    margin-right: 10px;

    }
</style>
<body>
    <main>
        <div class="Featured">
            <div class="Main_title">
                <h2>Featured</h2>
            </div>
            <div class="Main_images">
                <img src="images/Featured1.png" alt="">
                <img src="images/Featured2.png" alt="">
                <img src="images/Featured3.png" alt="">
            </div>
        </div>
<div class="See_What_New">
<div class="Main_title">
    <h2>See What's New</h2>
</div>

<div class="See_product">
<?php foreach ($list_products as $pro) : ?>
    
    <div class="product1">
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
    </div>

    <div class="product">
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
    </div>

    <div class="product2">
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
    </div>

    <?php endforeach ?>

</div>
</div>
</main>
</body>
</html>