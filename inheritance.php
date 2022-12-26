<!--   ----------* Inheritance *----------------------
1. When a class derives from another class.
2. The child class will inherit all the public and protected properties and methods from the parent class.
3. An inherited class is defined by using the extends keyword. -->


<?php
class class1
{
    function __construct()
    {
        echo "This is class 1 Construct <br>";
    }
    function fun1()
    {
        echo "This is class 1 Function <br>";
    }
}
class class2 extends class1
{
    function __construct()
    {
        parent::__construct();
        echo "This is class 2 Construct <br>";
    }
    function fun2()
    {
        parent::fun1();
        echo "This is class 2 Function <br>";
    }
}
$obj = New class2();
$obj->fun2();
?>