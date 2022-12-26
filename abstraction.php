<!--   ----------* Abstraction *----------------------
1. Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
2. An abstract class is a class that contains at least one abstract method.
4. An abstract method is declared, but not implemented in the parent class. -->

<?php
abstract class Cars                //Abstract class
{                 
    abstract function test();      //Abstract function without implemented
}
class class2 extends Cars
{
    function test()
    {
        echo "This is class 2 test Method ";
    }
}
$obj = New class2();
$obj->test();
?>