<?php
session_start();
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";

//include model
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Order.php";
require_once __DIR__ . "/../models/Comment.php";

//include controller
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/admin/DashboardController.php";
require_once __DIR__ . "/../controllers/AuthController.php";
require_once __DIR__ . "/../controllers/OrderController.php";
require_once __DIR__ . "/../controllers/CommentController.php";


$ctl = $_GET['ctl'] ?? "";
    
match ($ctl) {
    "" => (new DashboardController)->index(),
    // Sản phẩm
    "listsp" => (new AdminProductController)->index(),
    'addsp' => (new AdminProductController)->create(),
    'storesp' => (new AdminProductController)->store(),
    'editsp' => (new AdminProductController)->edit(),
    'updatesp' => (new AdminProductController)->update(),
    'deletesp' => (new AdminProductController)->delete(),

    // Danh mục
    'listdm' => (new AdminCategoryController)->index(),
    'adddm' => (new AdminCategoryController)->create(),
    'storedm' => (new AdminCategoryController)->store(),
    'editdm' => (new AdminCategoryController)->edit(),
    'updatedm' => (new AdminCategoryController)->update(),
    'deletedm' => (new AdminCategoryController)->delete(),

    // User
    'listuser' => (new AuthController)->index(),
    'updateuser' =>(new AuthController)->updateActive(),

    // Order
    'list-order' => (new OrderController)->index(),
    'detail-order' => (new OrderController)->showOrder(),

    // Comment
    'product-comment' => (new CommentController)->index(),
    'comment-detail' => (new CommentController)->list(),
    'active-comment' => (new CommentController)->updateActive(),
    default => view('404.404'),
};
