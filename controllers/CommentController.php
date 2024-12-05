<?php
class CommentController
{
    public function index(){
        $products = (new Comment)->listProductHasComments();
        return view('admin.comments.product-comment', compact('products'));
    }

    // Hiển thị commet theo sản phẩm
    public function list()
    {
        // Lấy id sản phẩm
        $id = $_GET['id'];

        $comments = (new Comment)->listCommentInProduct($id);

        $_SESSION['uri_comment'] = $_SERVER['REQUEST_URI'];

        return view('admin.comments.list', compact('comments'));
    }

    // Hiển thị, ẩn bình luận 
    public function updateActive()
    {
        $id = $_GET['id'];
        $value = $_GET['value'] ? 0 :1;
        (new Comment)->updateActive($id,$value);
        return header("location:" . $_SESSION['uri_comment']);
    }
}