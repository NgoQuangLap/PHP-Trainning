<?php
    require "./connect.php";

    // Câu SQL Update
    $sql = "DELETE FROM sanpham WHERE id = 1";
    $conn->exec($sql);
    
?>