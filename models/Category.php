<?php

class Category extends BaseModel
{
    //Lấy tất cả danh mục
    public function list()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    //Thêm 1 bản ghi
    public function create($data)
    {
        $sql = "INSERT INTO categories (cate_name) VALUES (:cate_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE categories SET cate_name=:cate_name WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        //thêm id vào mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }
    //Xóa bản ghi (xóa mềm không xóa khỏi database)
    // public function delete($id)
    // {
    //     //Chuyển trang thái của soft_delete từ 0->1
    //     $sql = "UPDATE categories SET soft_delete=1 WHERE id=:id";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute(['id' => $id]);
    // }
    public function delete($id)
{
    // Xóa bản ghi hoàn toàn khỏi bảng categories
    $sql = "DELETE FROM categories WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}

    //Chi tiết 1 bản ghi
    public function show($id)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

}
