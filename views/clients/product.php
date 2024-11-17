<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>