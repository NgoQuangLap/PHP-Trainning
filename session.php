<?php
    session_start();
    
    if( isset($_SESSION['count'])){
        $_SESSION['count'] += 1;
    }else{
        $_SESSION['count'] = 1;
    }
    $msg = " Bạn đã truy cập " . $_SESSION['count'] . " lần";
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
        echo $msg;
    ?>
</body>
</html>