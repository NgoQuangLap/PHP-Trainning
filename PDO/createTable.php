<?php
    require_once "./connect.php";

    // tạo bảng user trong database demo
    $sql = "CREATE TABLE `pdo`.`sanpham` ( `id` INT NOT NULL, 
    `Ten` VARCHAR(50) NULL , 
    `Gia` VARCHAR(50) NULL , 
    `ChiTiet` VARCHAR(50) NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    
    $conn->exec($sql);
?>