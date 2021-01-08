<?php
    class Home extends controller{
        function SayHi(){
           $lap = $this->model("sinhVienModel");
           echo $lap->getSinhVien();
        }

        function Show($a, $b){
            // Model
            $lap = $this->model("sinhVienModel");
            $tong = $lap->Tong($a, $b);

            // Hiển thị view
            $this->view("show", [
                "page" => "new",
                "number"=>$tong,
                "color" => "red",
                ]); // gọi đến show trong views
        }
    }
?>