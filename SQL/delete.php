<?php
    require "./connect.php";

    // Câu SQL Insert
    $sql = "DELETE FROM sanpham WHERE id=6";

    // Thực hiện thêm record
    if (mysqli_query($conn, $sql)) {
        echo "Xóa dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Ngắt kết nối
    mysqli_close($conn);
?>