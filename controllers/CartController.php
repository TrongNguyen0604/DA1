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
        $categories = (new Category)->list() ;
        $totalPriceOder = $this->totalPriceOder() ; 
        
        return view('clients.carts.cart', compact('carts', 'totalPriceOder', 'categories')) ; 
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

    //Cập nhật giỏ hàng
    public function updateCart() {
        $quantities = $_POST['quantity'] ; 
        //cập nhật số lượng
        foreach($quantities as $id => $qty) {
            $_SESSION['cart'][$id]['quantity'] = $qty ;
        }

        //Lấy tổng số lượng giỏ hàng lưu vào session
        $_SESSION['totalQuantity'] = $this->totalSumQuantity($_SESSION['cart']) ; 
        return header("Location:" . ROOT_URL . '?ctl=view-cart') ;
    }



    //Hiển thị thông tin thanh toán
    public function viewCheckOut() {
        //Kiểm tra xem người dùng đăng nhập chưa
        //Nếu chưa thì yêu cầu login
        if (!isset($_SESSION['user'])) {
            return header("location: " . ROOT_URL . '?ctl=login');
        }

        $user = $_SESSION['user'] ; 
        $carts = $_SESSION['cart'] ?? [] ; 
        // $sumPrice = (new CartController)->sumPrice();
        $totalPriceOder = $this->totalPriceOder() ; 

        return view("clients.carts.checkout", compact('user', 'carts','totalPriceOder')) ;
       }
    
    //Thanh toán
    public function checkOut() {
        //lấy thông tin người dùng
        $user  = [
            'id'       =>  $_POST['id'] ,
            'fullname' =>  $_POST['fullname'] , 
            'phone'    =>  $_POST['phone'] ,
            'address'  =>  $_POST['address'] ,
            'role'     =>  $_SESSION['user']['role'] ,
            'active'   =>  $_SESSION['user']['active'] ,
        ] ;

        $totalPriceOder = $this->totalPriceOder() ; 
        //Lấy thông tin thanh toán
        $order = [
            'user_id' => $_POST['id'] , 
            'status' => 1,
            'payment_method' => $_POST['payment_method'] , 
            'total_price' => $totalPriceOder ,
        ] ;

        (new User)->update($user['id'], $user) ;
        $order_id = (new Order)->create($order) ;  

        // $order_detail  =new Order ;
        $carts = $_SESSION['cart'] ; 
        foreach($carts as $id => $cart) {
            $or_detail = [
                'order_id' => $order_id , 
                'product_id' => $id , 
                'price' => $cart['price'] , 
                'quantity' => $cart['quantity'] ,
            ];
            (new Order)->createOrderDetail($or_detail) ;
        }
        //xóa thông tin giỏ hàng
        $this->clearCart() ; 
        return header("Location: " . ROOT_URL . "?ctl=success");
    }

    //Xóa giỏ hàng sau khi đã mua
    public function clearCart() {
        unset($_SESSION['cart']) ; 
        unset($_SESSION['totalQuantity']) ; 
        unset($_SESSION['URI']) ; 
    }

    public function success() {
        return view("clients.carts.success") ; 
    }
}

//