<?php
    // Tạo kết nối
    $conn = mysqli_connect('localhost', 'root', '');
    // Nếu kết nối thất bại
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } 
    // Lệnh tạo database
    $sql = "CREATE DATABASE PHPTrainning";
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo database thành công";
    } else {
        echo "Tạo database thất bại: " . mysqli_error($conn);
    }
    //Ngắt kết nối
    mysqli_close($conn);
?>