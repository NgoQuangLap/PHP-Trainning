<?php
session_start();
?>
<html>
<head>
	<title>Đăng nhập</title>
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
	require_once "./DBConnect.php";
	if (isset($_POST["btn_submit"])) {
		$taikhoan = $_POST["taikhoan"];
		$matkhau = $_POST["matkhau"];
		if ($taikhoan == " " || $matkhau ==" ") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from thongtin where taikhoan = '$taikhoan' and matkhau = '$matkhau' ";
			$query = mysqli_query($connn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows == 0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				$_SESSION['account'] = $taikhoan;
                header('Location: index.php');
			}
		}
	}
?>
	<form method="POST" action="login.php">
	    	
				<h1>Đăng nhập</h1>

				<div class="form-group">
				<input type="text" name="taikhoan" size="30"><span>Username: </span>
            	</div>
            	<div class="form-group">
					<input type="password" name="matkhau" size="30"><span>Password: </span>
            	</div>
	    		<tr>
	    			<td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Đăng nhập"></td>
	    		</tr>
	    	
  </form>
</body>
</html>