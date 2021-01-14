<!DOCTYPE html>
<?php
    require_once('./DBConnect.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <form action="" method="POST">
            <h1>Thêm mới </h1>
            <div class="form-group">
                <input type="number" name="id"><span>ID: </span>
            </div>
            <div class="form-group">
                <input type="text" name="name"><span>Họ và Tên: </span>
            </div>
            <div class="form-group">
                <input type="date" name="age"><span>Năm sinh: </span>
            </div>
            <div class="form-group">
                <input type="text" name="address"><span>Quê Quán: </span>
            </div>
            <div class="form-group">
                <button type="submit" name="btnThem">Thêm</button>
                <button type="reset">Reset</button>
            </div>
        </form>

        <?php
            if(isset($_POST['btnThem'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $address = $_POST['address'];

                $sql = insert($id, $name, $age, $address);
                if($sql < 0){
                    echo "Thêm thất bại";
                }else{
                    echo "Thêm mới thành công";
                    header("location: ../PHP Nâng Cao/index.php");
                }
            }
        ?>
    </body>
</html>