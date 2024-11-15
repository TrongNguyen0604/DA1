<?php

// Require file Common
require_once '../commons/env.php'; //khai báo biến từ môi trường 

// Require toàn bộ file Models
require_once './models/course.php';

// Require toàn bộ file Controllers
require_once './controllers/controllerCourse.php';

//route
$act = $_GET['act'] ?? '/';

match ($act){
    '/'=> (new DashboardController)->dashboard(),
    
}




?>