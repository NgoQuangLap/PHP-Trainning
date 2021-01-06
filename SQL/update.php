<?php
    require "./connect.php";

    // Câu SQL Insert
    $sql = "UPDATE sanpham SET Gia='2000000' WHERE id=7";

    // Thực hiện thêm record
    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Ngắt kết nối
    mysqli_close($conn);
?>