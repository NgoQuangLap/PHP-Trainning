<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbdatabase = "pdo";

    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbdatabase", $dbuser, $dbpassword); // kết nối đến database demo
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // bắt trường hợp ngoại lệ
        echo "Kết nối thành công!";
        
    } catch(PDOException $e) {
      echo "Thất bại: " . $e->getMessage();
    }
?> 