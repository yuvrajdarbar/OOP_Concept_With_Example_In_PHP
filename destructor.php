<!--   ----------* Destructor *----------------------
1. A destructor is called when the object is destructed or the script is stopped or exited.
2. If you create a __destruct() function, PHP will automatically call this function at the end of the script.
3. Destruct function starts with two underscores(__) -->

<?php
class cars
{
    public $name;
    public function __construct($name)
    {
        return $this->name = $name;
    }
    public function __destruct()
    {
        echo "The car name is: " . $this->name . '<br>';
    }
}
$BMW = New cars("Audi");
?>