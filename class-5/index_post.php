<?php
session_start();




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
                    echo $_SESSION["successful"] = "This is leap year";
                    header("location: index.php");
                } else {
                    echo $_SESSION["successful"] = "This is not leap year";
                    header("location: index.php");
                }
            } else {
                echo $_SESSION["year_error"] = "This field can't be accept string";
                header("location: index.php");
                // header("index")
            }
        } else {
            echo $_SESSION["year_error"] = "invalid number/year";
            header("location: index.php");
        }
    } else {
        $_SESSION["year_error"] = "this field can't be null or required";
        header("location: index.php");
    }
}
