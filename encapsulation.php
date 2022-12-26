<!--   ----------* Encapsulation *----------------------
1. Encapsulation is enclosing the internal details of the object to protect from external sources.
2. using Public, Protected and Private. 
3. Encapsulation is a process of wrapping similar code in one place. -->


<?php
class class1
{
    //public $num;          // By defualt variable is public
    protected $num;
    function __construct()
    {
        $this->num = 1;
    }
}
class class2 extends class1
{
    function getNum()
    {
        return $this->num;
    }
}
//$obj = New class1();
//$obj->num=2;            //if variable is protected then we can not access that value out of the calss.
//echo $obj->num;
//echo $obj->getNum();

$obj = New class2();
echo $obj->getNum();
?>