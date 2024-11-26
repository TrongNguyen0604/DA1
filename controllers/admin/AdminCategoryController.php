<?php

class AdminCategoryController 
{
    public function index()
    {
        //Lấy session thông báo
        $message = $_SESSION['message'] ?? '';
        // unset($_SESSION['message']); xóa session
        $categories = (new Category)->list();
        return view('admin.categories.list', compact('categories', 'message'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    //lưu dữ liệu vào csdl
    public function store()
    {
        $data = $_POST;
        (new Category)->create($data);
        $_SESSION['message'] = "Thêm dữ liệu thành công";
        header('location: ' . ADMIN_URL . '?ctl=listdm');
        die;
    }


    //Hiển thị form edit
    public function edit()
    {
        $id = $_GET['id'];
        $category = (new Category)->show($id);
        //lấy session thông báo
        $message = session_flash('message');
        return view('admin.categories.edit', compact('category', 'message'));
    }

    public function update()
    {
        $data = $_POST;
        (new Category)->update($data['id'], $data);
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";

        header("location: " . ADMIN_URL . '?ctl=editdm&id=' . $data['id' ]);
        die;
    }

    //xóa danh mục
    public function delete()
    {
        $id = $_GET['id'];
        (new Category)->delete($id);
        $_SESSION['message'] = "Xóa dữ liệu thành công";
        // Chuyển hướng lại đến danh sách danh mục
        header("location: " . ADMIN_URL . "?ctl=listdm");
        die;
    }

}