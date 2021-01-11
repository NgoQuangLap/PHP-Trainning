<?php
    require "./connect.php";

    // Câu SQL Update
    $sql = "UPDATE sanpham SET Gia='2000000' WHERE id=1";
    $conn->exec($sql);

?>