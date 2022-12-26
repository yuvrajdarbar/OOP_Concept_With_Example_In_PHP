<!--   ----------* Constructor *----------------------
1. A constuctor allows you to initialize an object's properties upon creation of the object
2. If you create a __ construct() function, PHP will autpmatically call this function when you create an object from a class
3. Construct function starts with two underscores (__) -->

<?php 
class cars{
    public $name;
    public $color;

    public function __construct($name,$color){
        echo "Car name is: " . $this->name = $name . "<br>";
        echo "Car color is: " . $this->color = $color . "<br>";
    }
   }
   $BMW = new cars("BMW","black");
?>