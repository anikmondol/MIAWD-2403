<?php

// $x = "hello";
// $y = 78;
// $z = "98.22";
// $a = true;



// $info = [
//     "house_name" => "Molla House",
//     "house_rent" => 1700 ."tk",
//     "water_rent" => 520.22,
//     "maid" => false
// ];
// $arr = [
//     "name" => "fahim",
//     "age" => 90,
//     "Blood_Group" => "A+",
//     "house_info" => $info
// ];


// echo $z;
// echo var_dump($z)
// print_r($arr["house_info"]['house_rent']);
// echo "<br>";
// echo var_dump($arr["house_info"]["house_rent"]);




/** 1. Arithmetic Operators **/ 

// $a = "10";
// $b = "90";


// $a = 1;
// $b = 6;
// $b += $a + 1;


// echo $b;







// ***conditional 


// 1. check age 

// $age = 19;

// if($age >= 18){
//     echo "Boyos hoise beta biya to kor.";
// }else{
//     echo "akhono bacca, age game khela sik";
// };



// 2. check odd and event number

// $number = 55.12;

// if($number % 1 == 0){
//     if($number % 2 == 0){
//         echo "$number is Even";
//     }else{
//         echo "$number is Even";
//     }
// }else{
//     echo "$number is not an integer";
// }



// 2. leapyear

// $year = 2000;

// if($year % 4 === 0){
//     echo "this $year is leapyear";
// }else{
//     echo "thsi $year is not leapyear";
// }



// 3. color cheak

// $color = "yellow";

// if($color === "green"){
//     echo "This color is green";
// }elseif($color === "yellow"){
//     echo "This color is yellow";
// }elseif($color === "blue"){
//     echo "This color is Blue";
// }elseif(isset($color)){
//     echo "this color is not found";
// }
// elseif(is_null($color)){
//     echo "this colord is null";
// }
// else{
//     echo "This color is Red";
// }


// 4. color cheak by switch 

// $color = "blue";

// switch($color){
//     case ($color === "red"):
//         echo "This color is red";
//         break;
//     case ($color === "yellow"):
//         echo "this colore yellow";
//         break;
//     case ($color === "blue"):
//         echo "this color is blue";
//         break;   
    
//     default:
//         echo "color nai";
//         break;    
        
// }


// $age = 18;

// switch($age){
//     case ($age >= 18):
//         echo "Tumei Biya koro";
//         break;  
    
//     default:
//         echo "Tumei dudu khao";
//         break;    
        
// }




// $result = -1;

// switch($result){
//     case($result >= 80 && $result <= 100):
//         echo "You Got A+";
//         break;

//     case($result >= 70 && $result <= 79):
//         echo "You Got A";
//         break;

//     case($result >= 60 && $result <= 69):
//         echo "You Got A-";
//         break; 

//     case($result >=50 && $result <= 59):
//         echo "You Got B";
//         break;

//     case($result >=40 && $result <= 49):
//         echo "You Got B";
//         break;

//     case($result >=30 && $result <= 39):
//         echo "You Got C";
//         break; 

//     case($result >= 0 && $result <= 29):
//         echo "You Got F";
//         break;  
    
//    case($result < 0 ):
//         echo "You got should be positive(-) number";
//         break;    

//     default:
//         echo "unvalidated input";
//         break;

// }





// Home work 


/*

1. Arithmetic Operators

=> The php arithmetic operators are use with nummeric values to perform common arithmetic operations, such as addition(+), subtraction(-), multiplication(*), divsion(/) etc.

***addition
$x = 10;
$z = 6;
echo $x + $z;
output ---> 16


***subtraction
$x = 10;
$z = 6;
echo $x - $z;
output ---> 4

***multiplication
$x = 10;
$z = 6;
echo $x * $z;
output ---> 60


***divsion
$x = 10;
$z = 5;
echo $x / $z;
output ---> 2


***modulus
$x = 24;
$z = 5;
echo $x % $z;
output ---> 4


***exponentiation
$x = 24;
$z = 5;
echo $x ** $z;
output ---> 1000





2. Assignment Operators
=> The php assignment operators are use with numeric values to write a value to a variable

***addition
$a = 20;
$a += 100;
echo $a;
output ---> 120



***subtraction	
$a = 50;
$a -= 20;
echo $a;
output ---> 30



***multiplication
$a = 6;
$a *= 6;
echo $a;
output ---> 36


***divison
$a = 10;
$a /= 2;
echo $a;
output ---> 5


***modulus
$a = 18;
$a %= 5;
echo $a;
output ---> 3






3. Comparison Operators
=> The php comparison operators used to compare two values(number or string)


***equal
$a = 58;
$b % = 15;
echo var_dump($a === $b);
output ---> bool(false)


***Identical
$a = "18";
$b %= 18;
echo var_dump($a === $b);
output ---> bool(false)

***not equal
$a = 25;
$b %= 11;
echo var_dump($a !== $b);
output ---> bool(true)



***greater than
$a = 10;
$b %= 18;
echo var_dump($a > $b);
output ---> bool(false)



***greater than or equal
$a = 82;
$b %= 18;
echo var_dump($a >= $b);
output ---> bool(true)




***less than
$a = 10;
$b %= 18;
echo var_dump($a > $b);
output ---> bool(false)

***less than or equal
$a = 82;
$b %= 18;
echo var_dump($a <= $b);
output ---> bool(false)


4. Increment / Decrement Operators
=> The php increment operators are use to increment a variable's value.
and decrement operators are used to decrement a variable's value.


***pre-increment
$a = 10;
echo ++$a;
output ---> 11


***post-increment
$a = 10;
echo $a++;
output ---> 10

***pre-decreincrement
$a = 10;
echo $--a;
output ---> 9

***post-decreincrement
$a = 10;
echo $a--;
output ---> 10


5. Logical Operators
=> The php logical operators are used to combine conditional statements.

***and(&&)
$a = 10;
$b = 50;

if($a === 10  && $b === 50){
    echo "true";
}else{
    echo "false";
}

***or(||)
$a = 10;
$b = 50;

if($a === 10  || $b === 50){
    echo "true";
}else{
    echo "false";
}

***not(!)
$a = 10;
$b = 50;

if(!($a === 10)){
    echo "true";
}

6. String Operators
=> php has two operators that are specially desinded for strings

***concatenation
$text1 = "hello";
$text2 = "world";
echo $text1 . $text2;
output ---> hello world


***concatenation assignment
$text1 = "hello";
$text2 = "world";
$text1 .= $text2;
echo text1;
output ---> hello world


*/ 



// cheak voter valid or unvalid


// $age = 17;

// if($age >= 18){
//     echo "you are valid voter";
// }else{
//     echo "you ara unvalid voter";
// }


// cheak mark used if, elseif, else.

$mark = -1;

if($mark >= 80 && $mark <= 100){
    echo "A+";
}elseif($mark >= 70 && $mark <= 79.9){
    echo "A";
}elseif($mark >= 60 && $mark <= 69.9){
    echo "A-";
}elseif($mark >= 50 && $mark <= 59.9){
    echo "B";
}elseif($mark >= 40 && $mark <= 49.9){
    echo "c";
}elseif($mark < 0){
    echo "you got positive $mark mark";
}else{
    echo "F";
}





















 


?>