<?php

class CartController {
    public function addToCard() 
    {
        //Lấy giỏ hàng , nếu chưa có giỏ hàng thì tạo giỏ hành mới
        $carts = $_SESSION['cart'] ?? [];
        
        //Lấy id của sản phẩm muốn thêm vào
        $id = $_GET['id'] ; 
        //Tìm sản phẩm theo id
        $product = (new Product)->find($id) ; 
        
        //Nhặt sản phẩm vảo giỏ
        //Nếu hàng đã tồn tại trong giỏ
        if(isset($carts[$id])) 
        {
            //tăng số lượng
            $carts[$id]['quantity'] += 1 ; 
        } else 
        {
            //Đưa sản phẩm vào giỏ
            $carts[$id] = [
                'name' => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1
            ] ;
        }
        //Lấy tổng số lượng giỏ hàng lưu vào session
        $_SESSION['totalQuantity'] = $this->totalSumQuantity($carts) ; 

        //Gán lại giỏ hàng cho session
        $_SESSION['cart'] = $carts ;
 
        $uri = $_SESSION['URI'] ; //Thông tin của đường dẫn trước đó

        //Di chuyển web về trang cũ
        return header("Location: " . $uri) ; 
    }
    //Tính tổng số luồng sản phẩm trong giỏ hàng
    public function totalSumQuantity($carts) {
        // $carts = $_SESSION['cart'] ?? [] ; 
        $total = 0 ;
        foreach ($carts as $cart) {
            $total += $cart['quantity'] ; 
        }
        return $total ; 
    }

    //Tính tổng tiền của đơn hàng
    public function totalPriceOder() {
        $carts = $_SESSION['cart'] ?? [] ; 
        $total =  0 ; 
        foreach($carts as $cart) {
            $total += $cart['price'] * $cart['quantity'] ; 
        }
        return $total ; 
    }

    //Hiện ra giỏ hàng
    public function viewCart() {
        $carts = $_SESSION['cart'] ?? [] ; 

        $totalPriceOder = $this->totalPriceOder() ; 

        return view('clients.carts.cart', compact('carts', 'totalPriceOder')) ; 
    }

    //xóa sản phẩm trong giỏ hàng 
    public function deleteProductInCart() {
        // $carts = $_SESSION['cart']
        //lấy id
        $id = $_GET['id'] ; 
        //Xóa sản phẩm trong giỏ hàng
        unset($_SESSION['cart'][$id]) ; 

        //Quay lại giỏ hàng
        return header("Location:" . ROOT_URL . '?ctl=view-cart') ; 
    }
}