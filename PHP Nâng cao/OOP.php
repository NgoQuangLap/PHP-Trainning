<?php
    class Fruit {
        public $name;
        public $color;

        function set_name($name) {
            $this->name = $name;
        }
        
        function get_name() {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>

<?php
    class People {
        public $name;
        public $age;

        function __construct($name) {
            $this->name = $name;
        }
        
        function __destruct() {
            echo "My name is:  {$this->name}.";
        }
    }

    $lap = new People("Quang Lap");
    echo "<br/>";
?>

 <!-- Statis -->
 <?php
    class Statis_Table{
     public static $name =  "Lap";
     public static function showName(){
         echo "My name is Naaap " ;
         echo "<br/>";
     }
    }
    // goi den showName
    Statis_Table::showName();
 ?>

 <!-- abstract va interface -->
<?php
    abstract class abstractTable{
        public $number;
        public $color;
        public function showColor(){
            echo "Mau xanh";
            echo "<br/>";
        }
    }


    class tableColor extends abstractTable{
        public function showColor(){
            echo "Mau vang";
            echo "<br/>";
        }
    }
    $backgroupColor = new tableColor();
    $backgroupColor->showColor();
?>