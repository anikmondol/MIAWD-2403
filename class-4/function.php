<?php

// indexed array
// $munnas = [
//     "name" => "fahim hossain",
//     "age" => 28,
//     "gender" => "male",
//     "blood" => "A+",
//     "contact" => "017*********"
// ];


// foreach($munnas as $munna){
//     echo $munna . "<br>";
// }




// associative array
// $munnas = [
//     "fahim hossain",
//     28,
//     "male",
//     "A+",
//     "017*********"
// ];


// $length = count($munnas);

// echo $length;

// for ($i=0; $i < $length; $i++) { 
//     echo "$munnas[$i] <br>";
// }



// function xyz(){
//     echo "amei valo ace <br>";
// }

// xyz();
// xyz();
// xyz();


// ***function


function sum($num1, $num2){
    return $num1 + $num2 . "<br>";
}


echo sum(20, 20);
echo sum(40, 20);
echo sum(20, 70);



function reuseable($name, $des){
    echo "Name: $name";
    echo "<br>";
    echo "Description: $des";
}


reuseable("anik", "I love dhaka <br>");
for ($i=1; $i <= 10; $i++) { 
    echo "$i <br>";
}
reuseable("apu", "I love Bangaldesh <br>");
if (true) {
    echo "i am also happy <br>";
}
reuseable("apurbo", "I love india <br>");




















?>
