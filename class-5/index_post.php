<?php

session_start();


// echo "anik aco tumei";
// print_r($_SERVER);
// print_r($_POST);
// echo $_POST["username"];
// echo "<br>";
// echo $_POST["password"];


// $user_name = $_POST["username"];
// $user_name = $_POST["password"];

// echo "Email : $user_name";
// echo "<br>";
// echo "Password : $user_name";


if (isset($_POST["submit"])) {
    $year = $_POST["year"];

    if ($year ) {
        if (strlen($year) == 4) {

            if (is_numeric($year)) {
                if ($year % 4 == 0 && ($year % 400 == 0 || $year % 100 != 0)) {
                    $_SESSION["successful"] = "This is leap year";
                    header("location: index.php");
                 }else{
                     $_SESSION["successful"] = "This not leap year";
                     header("location: index.php");
                 }
            } else {
                $_SESSION["erro"] =  "This field can't be accept strin";
                header("location: index.php");
            }
        } else {
            $_SESSION["erro"] =  "invalid number/year";
            header("location: index.php");
        }
    } else {
        
        $_SESSION["erro"] = "This field can't be null required ";
        header("location: index.php");
    }
    

    
}
