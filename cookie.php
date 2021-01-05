<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Lap";
setcookie($cookie_name, $cookie_value, time() + 10, "/");
?>
<html>
<body>
 
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie có tên '" . $cookie_name . "' chưa được tạo!";
} else {
     echo "Cookie '" . $cookie_name . "' đã được tạo!<br>";
     echo "Giá trị là: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>