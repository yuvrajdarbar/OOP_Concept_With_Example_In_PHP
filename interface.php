<!--   ----------* Interface *----------------------
1. Interfaces are declared with the interface keyword.
2. To implement an interface, a class must use the implements keyword.
3. Interfaces canot have properties, while abstract classes can.
4. All interface methods must be public, while abstract class methods is public or protected.
5. All methods in an interface are abstract.-->

<?php
interface class1
{
    public function test1();
}
interface class2
{
    public function test2();
}
class class3 implements class1, class2
{
    public function test1()
    {
        echo "This is class 3 test 1 function <br>";
    }
    public function test2()
    {
        echo "This is class 3 test 2 function";
    }
}
$obj = New class3();
$obj->test1();
$obj->test2();
?>