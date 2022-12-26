<!--   ----------* Abstraction *----------------------
1. Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks
2. An abstract class is a class that contains at least one abstract method.
4. An abstract method is a method is a method that is declared, but not implemented in the code -->

<?php 
abstract class Cars{                 //Abstract class
      abstract function test();      //Abstract function without implemented
}
class class2 extends Cars{
  function test(){
      echo "This is class 2 test Method ";
  }
}
$obj=new class2();
$obj->test();
?>