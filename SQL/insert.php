<?php
    require "./connect.php";

    // Câu SQL Insert
    $sql = "INSERT INTO sanpham (id, SanPham, Gia, ChiTiet) 
    VALUES ('6', 'Iphone X', '1000000', 'Xin')";

    // Thực hiện thêm record
    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Ngắt kết nối
    mysqli_close($conn);
?>