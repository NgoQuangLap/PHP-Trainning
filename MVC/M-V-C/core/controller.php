<?php
    class controller{
        public function model($model){
            require_once "./M-V-C/models/" . $model .".php";
            return new $model;
        }

        public function view($view, $data=[]){ //$data dùng hứng dữ liệu đổ ra view
            require_once "./M-V-C/views/" . $view .".php";
            // return new $view;
        }
    }
?>