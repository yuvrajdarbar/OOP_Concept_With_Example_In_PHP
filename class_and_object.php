<!--   ----------* Class and Object *----------------------
1. An object is an individual instance of the data structure defined a class. 
2. We define a class once and then make many objects that belong to it.
3. Objects are also knows as instances. -->

<?php 
class cars{
    public $name;      //Member variable   
    public $color;     //Member variable 

    public function get_name($name,$color){     //Member function
        echo "Car name is: " . $this->name = $name . '<br>';
        echo "Car Color is: " .$this->color = $color . '<br><br>';
    }
}
$BMW = new cars();                          //Object 1  
$BMW->get_name("BMW","Red");                // Call to member function using object 1 
$audi = new cars();                         //Object 2
$audi->get_name("Audi","White");            //Call to member function using object 2
?>