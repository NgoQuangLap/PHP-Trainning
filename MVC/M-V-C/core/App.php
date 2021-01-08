<?php
    class App{
        // http://localhost/PHP-trainning/MVC/Home/SayHi/1/2/3
        protected $controller="Home";
        protected $action="SayHi";
        protected $param=[];

        function __construct(){
            // gọi đến function urlProcess
            // Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 )
            $arr = $this->urlProcess();
            // print_r($arr);

            // Xử lý Controller về trang
            if(file_exists("./M-V-C/controllers/".$arr[0].".php")){  // Kiểm ttra Home.php có tồn tại hay không?
                $this->controller = $arr[0];
                unset($arr[0]); // hủy sau khi đã lấy
            } 
            require_once "./M-V-C/controllers/". $this->controller .".php";
            $this->controller = new $this->controller;

            // Xử lý function trong trang
            // nếu function có tồn tại thì chạy đến nếu không thì chạy vào SayHi
            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){ // Kiểm tra function trong trang có tồn tại hay không
                    $this->action = $arr[1];
                } 
                unset($arr[1]);
            }
            // echo $this->action;

            // Xử lý Param trong function
            $this->param = $arr?array_values($arr):[]; // nếu param có thì chạy đến nếu không thì trả về giá trị rỗng
            
            call_user_func_array([$this->controller, $this->action], $this->param); // hàm gọi đến function
        }

        function urlProcess(){
            // /Home/SayHi/1/2/3
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"], "/")));// Loại bỏ khoảng trắng trên url và cắt chuỗi theo ký tự /
            }
        }
    }
?>