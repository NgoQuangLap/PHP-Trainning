<?php session_start();
if (isset($_POST['save-session']))
{
    $_SESSION['name'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
            <?php
            if (isset($_SESSION['name']))
            {
                echo 'Tên Đăng Nhập Là: ' . $_SESSION['name'];
            }
            ?>
        </h1>

        <form method="POST" action="">
            <input type="text" name="username" value=""/> <br/>
            <input type="submit" name="save-session" value="Lưu Session"/>
            <input type="submit" name="reset" value="Xóa Session" />
        </form>

        <?php
            if(isset($_SESSION['name'])){
                unset($_SESSION['name']);
                // session_destroy();
            }               
        ?>
    </body>
</html>