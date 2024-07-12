<?php

/*

1. while loop
2. do while loop
3. for
4. foreach


*/ 



// ***while loop


// $x = 0;

// while ($x <= 100) {
//     echo "$x <br>";
//     $x+=2;
// }




// ***do while loop

// $x = 0;

// do {
//    echo "$x";
//    $x++;
// } while ($x <= 10);






// ***for loop


// for ($x=0; $x <= 10; $x++) { 
//     // echo "$x . i love sorry  <br>";


//     // use continue
//     // if($x % 2 === 0){
//     //     continue;
//     // }

//     // use break
//     if($x >= 6){
//         break;
//     }

//     echo $x;
// }



// $munnas = [
//      "fahim hossain",
//      28,
//      "male",
//      "A+",
//      "017*********"
// ];

// $length = count($munnas);

// echo $length;

// for($count = 0; $count < $length; $count++){
//     if($munnas[$count] === "A+"){
//         break;
//     }
//     echo "$munnas[$count] <br>";

// }












$user = 4;


for ($count=1; $count <= 10; $count++) { 
    echo $count . " x " . $user . " = " . $count * $user .  "<br>";
  
}






















// ***foreach loop




// $munnas = [
//     "name" => "fahim hossain",
//     "age" => 28,
//     "gender" => "male",
//     "blood" => "A+",
//     "contact" => "017*********"
// ];


// foreach ($munnas as $munna ){
//     echo "$munna <br>";
// }








?> 


<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php foreach($munnas as $munna){ ?>
        <li><?php echo $munna;?></li>
        <?php }?>
    </ol>
</body>
</html> -->