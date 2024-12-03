<?php
class ProductController {
    //Hiển thị ds sản phẩm theo danh mục
    public function list() {
        //lấy id danh mục
        $id = $_GET['id'] ; 
        // lấy sản phẩm theo danh mục
        $products = (new Product)->listProductInCategory($id) ; 

        //lấy ra tên của Category
        $title = (new Category)->show($id) ; 
        $title = $title['cate_name'] ; 

        //lấy ra danh mục
        $categories = (new Category)->list() ; 

        return view('clients.products.list',compact('products','title','categories'));
    }

    //show chi tiết sản phẩm
    public function show() {
        // lấy id sản phẩm
        $id = $_GET['id'] ; 
        // lấy chi tiets sản phẩm
        $product = (new Product)->find($id) ; 
        //Thêm comment
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = $_POST ; 
            //Thêm products_id và user_id
            $data['product_id'] = $id ; 
            $data['user_id'] = $_SESSION['user']['id'] ; 
            (new Comment)->create($data) ; 
        }

        $title = $product['name'] ; 
        $categories = (new Category)->list() ;

        //Lưu lại đường dẫn vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'] ; 
        // $_SESSION['totalQuantity'] = (new CartController) -> totalSumQuantity($carts);

        //Lấy danh sách comments
        $comments = (new Comment)->listCommentInProduct($id) ;
        return view(
            'clients.products.detail',
            compact('product', 'categories', 'title', 'comments')
        ) ;
    }
}
