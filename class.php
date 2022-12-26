<!--   ----------* class *----------------------
1. Class is a set of object which shares common characteristics/behavior and common properties/attributrs.
2. class is not a real world entiry. it is just a template or blueprint or prototype from which object are created.
3. Class does not occupy memory.
4. Class is a group of variables of different data types and group of methods. -->

<?php
class cars
{
    public $name;      //Member variable   
    public $color;     //Member variable 

    public function get_name($name, $color)     //Member function
    {    
        echo "Car name is: " . $this->name = $name . '<br>';
        echo "Car Color is: " . $this->color = $color . '<br><br>';
    }
}
?>