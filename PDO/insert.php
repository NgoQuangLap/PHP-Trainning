<?php
    require_once "./connect.php";

    $sql = "INSERT INTO sanpham (id, Ten, Gia, ChiTiet) 
    VALUES ('1', 'Iphone X', '1000000', 'Xin')";

    $conn->exec($sql);
?>