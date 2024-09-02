<?php

// part-1

// class A{

// public $name = "anik"."<br>";

// function greeting($x) {
//     return "kemon aso bondhu $x";
// }

// function sum($a, $b){
//     return $a + $b;
// }



// public function __construct($a)
// {
//     echo "amei akta filer $a"."<br>";
// }
// public function __destruct() {
//     echo "necay ace vai";
// }

// public function x() {
//     echo "wow";
// }


// }

// $object_of_classA = new A("anik");



// echo $object_of_classA->name;
// echo $object_of_classA->greeting("joy");
// echo $object_of_classA->name = "mondol";
// echo $object_of_classA->sum(10,2);


// part-2

class A{

    // inheritance

    protected $x = "Fahim Hossain Munan";

    public function ki($a){
       return  $this->x = $a;
    }

}


class B extends A{
    public $name = "amol";
}


class Son extends A{
    public $dotuer = "joy";
    public function tai($c){
        return $this->x = $c;
    }

}


$object_of_classB = new Son();

// echo $object_of_classB->x ."<br>";
// echo $object_of_classB->ki("nai");
// echo $object_of_classB->tai("nai");
// echo $object_of_classB->name;
echo $object_of_classB->dotuer;


?>