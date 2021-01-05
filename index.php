<?php
    //gọi đến file connect
    include 'connectDataBase.php';
    // truy vấn
    $sql = "SELECT * FROM sanpham";
    $query = mysqli_query($conn, $sql);

    // đếm số lượng dữ liệu trả về
    $total_row = mysqli_num_rows($query);
    echo $total_row;

    // Hiển thị toàn bộ dữ liệu
    // $row = mysqli_fetch_array($query);
    // echo $row['SanPham'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($row = mysqli_fetch_array($query)){
            echo "Sản phẩm: " .$row['SanPham'] . "  Giá: " . $row['Gia'] ."<br>";
        }
    ?>
</body>
</html>