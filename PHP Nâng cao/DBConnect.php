<?php
    function connect(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbdatabase = "sinhvien";

        return new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase); 
    };

    $connn = connect();
    $sqli = "SELECT * FROM thongtin";
    $result = mysqli_query($connn, $sqli);

    // $sqli = "SELECT * FROM `thongtin` ORDER BY `id`";
    // $result = mysqli_query($connn, $sqli);

    // truyền dữ liệu vào data
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $data[] = $row;
    // }

    function delete($id){
        $connDelete = connect();
        $sqlDelete = $connDelete->query('DELETE FROM thongtin WHERE `id` = "'.$id.'"');
        return $sqlDelete;
    }

    function insert($id, $name, $age, $address){
        $conn = connect();
        $sql = $conn->query('INSERT INTO thongtin
        VALUES ("'.$id.'","'.$name.'","'.$age.'","'.$address.'")');
        return $sql;
    }   
?>