<?php


// echo $_SERVER;
// print_r($_SERVER);
// print_r($_POST);
// print_r($_POST["email"]);
// print_r($_POST["password"]);


// $email = $_POST["email"];
// $password = $_POST["password"];
// echo "user-email: $email " ."<br>"; 
// echo "user-password: $password";







if (isset($_POST["submit"])) {
    $year = $_POST["year"];

    if ($year) {
        if (strlen($year) == 4) {
            if (is_numeric($year)) {

                if ($year % 4 === 0 && ($year % 400 === 0 || $year % 100 != 0)) {
                    echo "This is leap year";
                } else {
                    echo "This is not leap year";
                }
            } else {
                echo "This field can't be accept string";
            }
        } else {
            echo "invalid number/year";
        }
    } else {
        echo "this field can't be null or required";
    }
}
