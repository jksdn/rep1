<?php

/**
 * Members declared as public can be accessed everywhere
 * 
 * Members declared as protected can be accessed only within the class itself
 * and by inheriting and parent classes
 * 
 * Members declared as private may only be accessed by the class that defines
 * the memeber
 */

/**
 * Define Example1 class
 */
class Example1
{
    public $field1 = 'Public 1';
    protected $field2 = 'Protected 1';
    protected $field3 = 'Protected 1';

    public function method1()
    {
        echo $this->field1;
        echo $this->field2;
        echo $this->field3;
    }
}

/**
 * Public and Protected properties can be redeclared, except private
 */

/**
 * Define Example2 class
 */
class Example2 extends Example1
{
    public $field1 = 'Public 2';
    protected $field2 = 'Protected 2';

    public function method1()
    {
        echo $this->field1;
        echo $this->field2;
        echo $this->field3;
    }
}

$object1 = new Example1();
$object2 = new Example2();

$object1->method1();
$object2->method1();