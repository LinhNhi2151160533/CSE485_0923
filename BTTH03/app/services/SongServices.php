<?php

require_once APP_ROOT.'../app/models/Song.php';

class SongService{
    public function getAllSongs(){
        // Bước 1: Kết nối Database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null ){
            // Bước 2: Truy vấn dữ liệu
            $sql = "SELECT * FROM baihat ORDER BY id ASC ";
            $stmt = $conn->query($sql);

            // Bước 3: Xử lý kết quả trả về
            $Songs = [];
            while ($row = $stmt->fetch()) {
                $Song = new Song($row['id'], $row['tenBaiHat'], $row['caSi'], $row['idTheLoai']);
                $Songs[] = $Song;
            }
            return $Songs;
        }
    }

    public function addSongs(){
        // Bước 1: Kết nối Database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null ){
            $tenBaiHat = $_POST['tenBaiHat'];
            $caSi = $_POST['caSi'];
            $idTheLoai = $_POST['idTheLoai'];
            // Bước 2: Truy vấn dữ liệu
            $sql = "INSERT INTO Songs(tenBaiHat, caSi, idTheLoai) VALUES ($tenBaiHat, $caSi, $idTheLoai)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // Bước 3: Xử lý kết quả trả về
            if($stmt->rowCount()>0){

               header("Location:../view/home/index.php");
                echo "Thanh cong";
                // Thong bao da thanh cong
            }
            else{
                // Thong bao khong thanh cong
                echo "Thai bai";
            }
        }
    }
}