<?php
session_start() ; 

// models
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/User.php";

// controllers
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/ClientCategoryController.php";
require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/CartController.php";
require_once __DIR__ . "/controllers/AuthController.php";



$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    'category' => (new ProductController)->list(),
    'detail' => (new ProductController)->show() , 
    'add-cart' => (new CartController)->addToCard() , 
    'view-cart' => (new CartController)->viewCart(),
    'delete-cart' => (new CartController)->deleteProductInCart(),
<<<<<<< HEAD
    'update-cart' => (new CartController)->updateCart(),
=======
    'register' => (new AuthController)->register(),
    'login' => (new AuthController)->login(),
    'logout' => (new AuthController)->logout(),
>>>>>>> d2aeb6a3eacc807ac3fa30533c21e5fc05568844
    default => view("404.404"),
};
