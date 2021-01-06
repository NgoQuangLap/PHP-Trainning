<?php
$a = '1';
if (isset($a)) {
echo "Biến 'a' tồn tại";
}else{
echo "Biến 'a' không tồn tại";
}

echo "<br/><br/>";
?>

<form method="post">
  
Tên :<input type="text" name="username"><br/>
Pass :<input type="text" name="password"><br/>
<input type="submit" value="Đăng nhập" name="click"><br/><br/></pre>
</form>
 
<?php
$username = empty($_POST['username']);
$password = empty($_POST['password']);
if ($username == ' ') {
echo 'Tài khoản trống<br/>';
}
 
if ($password == ' ') {
echo 'Mật khẩu trống';
}
?>

<?php
echo "<br/><br/>";
    $arr = [];
    if(is_array($arr)){
        echo "Đây đúng là mảng";
    }else{
        echo "Đây không phải mảng";
    }
echo "<br/><br/>";
    $string = "QuanLap";
    if(is_string($string)){
        echo "Đây đúng là chuỗi";
    }else{
        echo "Đây không phải chuỗi";
    }
?>