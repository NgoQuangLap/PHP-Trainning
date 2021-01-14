<!DOCTYPE html>
<html>
    <head>
        <script type="text/JavaScript">
            
        </script>
        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý sinh viên</h1>
            <thead>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <a href="create.php"><button id="button">Thêm mới</button></a>
                        </td>
                     </tr>
                </tfoot>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên sinh viên</th>
                    <th>Năm sinh</th>
                    <th>Quê quán</th>
                    <th style="width: 10%;">Sửa</th>
                    <th style="width: 10%;">Xóa</th>
                </tr>
                <?php
                    require_once "./DBConnect.php";
                    while($value = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>".$value["id"]."</td>";
                        echo "<td>".$value["Ten"]."</td>";
                        echo "<td>".$value["NamSinh"]."</td>";
                        echo "<td>".$value["QueQuan"]."</td>";
                        echo "<td><a href='update.php?id=".$value['id']."'>Sửa</a>";
                        echo "<td>
                                <form action='' method='POST'>
                                    <button style='submit' name='btnXoa' value='".$value['id']."'>Xóa</button>
                                </form>
                            </td>";
                        echo "</tr>";
                    }
                ?>

            </thead>

            

        <?php
            require_once "./DBConnect.php";
            if(isset($_POST['btnXoa'])){
                $id = $_POST['btnXoa'];

                $sqlDelete = delete($id);
                if(!$sqlDelete){
                    echo "Xóa thất bại";
                }else{
                    echo "Xóa thành công";
                }
            }
        ?>

            
        </table>
    </body>
</html>
