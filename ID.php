<?php
    require "./connect.php";

    // Câu SQL Insert
    $sql = "INSERT INTO sanpham (id, SanPham, Gia, ChiTiet) 
    VALUES ('9', 'Iphone XS', '1000000', 'Xin')";

    // Thực hiện thêm record
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        echo "Thêm dữ liệu thành công có id là $id";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Ngắt kết nối
    mysqli_close($conn);
?>