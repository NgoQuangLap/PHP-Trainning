<!DOCTYPE html>
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
        <?php   
            require "./DBUpdate.php"; 
            $id = $_GET['id'];
            $query= mysqli_query($conn,"select * from `thongtin` where id='$id'");
            $row = mysqli_fetch_assoc($query);
            print_r($row);
        ?>
        <form action="" method="POST">
            <h1>Cập nhật </h1>
            <div class="form-group">
                <input type="text" name="Ten" value="<?php echo $row['Ten']; ?>"><span>Họ và Tên: </span>
            </div>
            <div class="form-group">
                <input type="date" name="NamSinh" value="<?php echo $row['NamSinh']; ?>"><span>Năm sinh: </span>
            </div>
            <div class="form-group">
                <input type="text" name="QueQuan" value="<?php echo $row['QueQuan']; ?>"><span>Quê Quán: </span>
            </div>
            <div class="form-group">
                <button type="submit" name="btnUpdate">Cập nhật</button>
            </div>
        </form>

        <?php
            if (isset($_POST['btnUpdate'])){
                $id=$_GET['id'];
                $name=$_POST['Ten'];
                $age=$_POST['NamSinh'];
                $address=$_POST['QueQuan'];
            
            
            $sql = "UPDATE `thongtin` SET Ten='$name', NamSinh='$age', QueQuan='$address' WHERE id='$id'";
 
            if ($conn->query($sql) === TRUE) {
                echo "Cập nhật thành công";
                header("location: ../PHP Nâng Cao/index.php");
            } else {
                echo "Thất bại: " . $conn->error;
            };
        };
        ?>

    </body>
</html>