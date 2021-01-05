<?php
    // Kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'PHPTrainning');
 
    // Kiểm tra kết nối 
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }
 
    // Câu lệnh SQL
    $sql = "CREATE TABLE SanPham (
        id INT(6) PRIMARY KEY,
        content TEXT,
        add_date TIMESTAMP
    )";
 
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) {
    echo "Tạo table thành công";
} else {
    echo "Tạo table thất bại: " . mysqli_error($conn);
}
 
// Ngắt kết nối
mysqli_close($conn);
?>