<?php

    session_start();


    // print_r($_POST)

    if (isset($_POST["submit_btn"])) {
    

        // ***problem-1
        // $v = $_POST["name"];
        // $values = explode(" ", $v);
        // $name = "";
        // foreach($values as $value){
        //     $value .= "$value";
        //     $name = strtolower($value);
        // }

        // ***problem-2
        $name =trim($_POST["name"]);
        $name = preg_replace('/\s+/', ' ', $name);
        $name = str_replace(' ','',$name);
     


        $str_len = strlen($name);
        // var_dump($name);


        
        $password = $_POST["password"];
        $email = $_POST["email"];
        $c_password= $_POST["c_password"];


        if (!$name) {
            $_SESSION["name_error"] = "Name Field is Required!!!";
            header("location: register.php"); 
        }elseif(!ctype_alpha($name)){
            $_SESSION["name_error"] = "We can't use any numarical character!!!";
            header("location: register.php");
        }elseif(strlen($name) >= 30){
            $_SESSION["name_error"] = "We can't use any 30 length character!!!";
            header("location: register.php");
            
        }
        

    }
    

    /*
    
   

    
    
    */ 






?>