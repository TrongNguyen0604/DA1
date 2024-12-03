<?php

function view($view, $data = [])
{
    extract($data);

    $view = str_replace('.', '/', $view);
    include_once ROOT_DIR . "views/$view.php";
}

//hàm dd dùng để debug 
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

//Hàm session_flash, se hủy session ngay lập tức
function session_flash($key)
{
    $message = $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
    return $message;
}

// Chuyển đổi trạng thái đơn hàng
function getOrderStatus($status){
    $status_details = [
        1 => 'Chờ sử lý',
        2 => 'Đang sử lý',
        3 => 'Hoàn thành',
        4 => 'Đã hủy'
    ];
    return $status_details[$status];
}
