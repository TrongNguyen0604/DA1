<?php
class HomeController
{
    //Hiển thị trang chủ
    public function index()
    {
        //Lấy pét
        $product = new Product;
        $pets = $product->listPets();

        //Lấy sản phẩm khác
        $list_products = $product->listHome1();
        return view('clients.home', compact('pets', 'list_products'));
    }
    
}
