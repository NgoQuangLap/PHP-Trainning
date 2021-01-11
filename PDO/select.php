<?php
    require_once "./connect.php";

    $sql = "SELECT * FROM sanpham";
    $query = $conn->prepare($sql);
    $query->execute();

    // hiển thị ra
    while ($a = $query->fetch( PDO::FETCH_ASSOC )) {
        // dữ liệu trả về sẽ có dạng mảng đầy đủ
        // FETCH_ASSOC trả về mảng chỉ có key và value
        // FETCH_NUM trả mảng chỉ số và value /
        // FETCH_OBJ trả về đối tượng
        echo '<pre/>';
        var_dump($a); 
        echo '<pre/>';
    }
?>