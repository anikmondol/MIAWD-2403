<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M IAWD 2403</title>
</head>

<body>
    <form action="index_post.php" method="POST">

        <!-- <input type="text" placeholder="eneter your value" name="email">
        <input type="text" placeholder="eneter your value" name="password">
        <button type="submit">Submit</button> -->


        <!-- input -->
        <input type="text" placeholder="enter your value" name="year">

        <!-- session error -->
        <?php if(isset($_SESSION["year_error"])){?>
        <p style="color:red;font-size:12px;"><?php echo $_SESSION["year_error"];?></p></p>
        <?php unset($_SESSION["year_error"]); }?>

         <!-- session successful -->  
        <?php if(isset($_SESSION["successful"])){?>
        <p style="color:green;font-size:12px;"><?php echo $_SESSION["successful"];?></p>
        <?php unset($_SESSION["successful"]);}?>

        <!-- from button -->
        <button name="submit" type="submit">submit</button>









    </form>
</body>

</html>