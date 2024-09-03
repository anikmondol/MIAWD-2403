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

// class A{

    // inheritance

//     protected $x = "Fahim Hossain Munan";

//     public function ki($a){
//        return  $this->x = $a;
//     }

// }


// class B extends A{
//     public $name = "amol";
// }


// class Son extends A{
//     public $dotuer = "joy";
//     public function tai($c){
//         return $this->x = $c;
//     }

// }


// $object_of_classB = new Son();

// echo $object_of_classB->x ."<br>";
// echo $object_of_classB->ki("nai");
// echo $object_of_classB->tai("nai");
// echo $object_of_classB->name;
// echo $object_of_classB->tai("sdf");


?>


<?php


// class A{

//     private $name;

//     protected function greeting($x) {
//         return $this->name = $x;
//     }

// }


// class B extends A{
//     public $name = "anik";
//     public $name2 = "anik mondol";

//     public function josim($y){
//         return $this->greeting($y);
//     }
// }


// $output = new B();


// echo $output->josim("adads");



// abstract class A{
//     // abstract
//     // abstract function sum($a, $b);
//     // abstract function multipy($a, $b);
//     abstract function hi($x);
// }


// class B extends A{
    // public function sum($x, $z) {
    //     return $x + $z;
    // }
    // public function multipy($x, $z) {
    //     return $x * $z;
    // }
    // public function hi($x){
    //     return "hello $x valo aco";
    // }
// }




// class C extends B{
//     // public function sum($x, $z) {
//     //     return $x + $z;
//     // }
//     // public function multipy($x, $z) {
//     //     return $x * $z;
//     // }
//     // public function hi($y){
//     //     return "hello $y valo aco";
//     // }
// }


// $output = new B();
// $outputx = new C();

// // echo $output->sum(10,20) ."<br>";
// // echo $output->multipy(10,20);
// echo $output->hi("anik") ."<br>";
// echo $outputx->hi("tipu");



// class A{
//     public static $name = "hi";
//     static function hello($x) {
//         return self::$name = $x;
//     }
// }


// class B extends A{
//     public function okay($y) {
//         return parent::hello($y);
//     }
// }


// $output = new B();

// // echo $output::$name;
// // echo $output::hello("asdfasd");
// echo $output->okay("asdfasd");




// interface A{
//    public function sum($a, $b);
// }

// interface B{
//     public function multipy($a, $b);
//  }
//  interface C{
//     public function subtract($a, $b);
//  }

//  class Boro implements A,B{
//     function sum($a, $b) : int {
//         return $a + $b;
//     }
//     function multipy($a, $b) : int {
//         return $a * $b;
//     }
//  }


//  $object = new Boro();

//  echo $object -> sum(10,40)."<br>";
//  echo $object -> multipy(10,40);

trait A{ 

public function sum($a, $b){
    return $a + $b;
}

public function sub($a, $b){
    return $a - $b;
}

public function multipy($a, $b){
    return $a * $b;
}

}

class Boro{
    use A;
}


$output = new Boro;

echo $output -> multipy(11,2);
echo $output -> sum(11,2);
echo $output -> sub(11,2);
?>