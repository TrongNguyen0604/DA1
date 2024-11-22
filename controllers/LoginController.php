<?php
class LoginController{
    public function index()
    {
        session_start();
        require_once('./models/User.php');
        if (isset($_POST['submit'])){
            // Xử lý form
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($username != '' && $password != ''){
                $user = new User();
                $check = $user->check($username,$password);
                if ($check != NULL){
                    echo "Đăng nhập thành công";
                } else {
                    echo "Sai username hoặc password";
                }
            }
        }
        include('./views/clients/header.php');
        include('./views/clients/login.php');
        include('./views/clients/footer.php');
        
        
        
    }
}