<?php
class User extends BaseModel{
    // public function check($username, $password)
    // {
    //     $sql = "SELECT * FROM admin WHERE username=:$username AND password=:$password";
    //     $stmt = $this->conn->prepare($sql);
    //     echo($sql);
    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    public function check($username, $password) {
        // Sử dụng tham số đúng cách trong câu lệnh SQL
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $this->conn->prepare($sql);

        // Gán giá trị cho tham số
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        // Thực thi câu lệnh SQL
        $stmt->execute();

        // Lấy kết quả
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Trả về kết quả nếu tìm thấy, hoặc false nếu không có bản ghi nào
        return $result ? $result : false;
    }
}