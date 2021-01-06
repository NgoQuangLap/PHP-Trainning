<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="upload"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
    <?php
        if(isset($_POST['uploadclick'])){
            if($_FILES['upload'] ['error'] > 0){
                echo "<br/> Lỗi upload!";
            }else{
                move_uploaded_file($_FILES['upload']['tmp_name'],
                 'upload/' .$_FILES['upload']['name']);
                 echo "<br/> Thành công!";
                 echo "<pre>";
                    print_r($_FILES['upload']);
                 echo "</pre>";

                 // dowload 
                 $st = "upload/" . $_FILES['upload']['name'];
                 echo "<br> <a href='$st'>Dowload</a>";
            }
        }
    ?>
</body>
</html>