<?php


if (isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];


    $operation = $_POST["operation"];


    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'sum':
                $sum = $num1 + $num2;
                echo "The Addition of two number is : {$sum}";
                break;


            case 'sub':
                $sub = $num1 - $num2;
                echo "The Subtraction of two number is : {$sub}";
                break;

            case 'mul':
                $mul = $num1 * $num2;
                echo "The Multiplication of two number is : {$mul}";
                break;

            case 'div':
                $div = $num1 / $num2;
                echo "The Division of two number is : {$div}";
                break;


            default:
                echo "Can't posible  operation";
                break;
        }
    } else {
        echo "giv me valid input";
    }
} else {
    echo "some error here. please fix this problem";
}




?>