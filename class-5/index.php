<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M IAWD 2023</title>
</head>

<body>
    <form action="index_post.php" method="POST">
        <!-- <input type="text" placeholder="enter your value" name="username"> -->




        <input type="text" placeholder="enter your value" name="year">

        <?php if (isset($_SESSION["erro"])) { ?>
            <p style="color:red; font-size:12px">
                <?php echo $_SESSION["erro"] ?>
            </p>
        <?php } unset($_SESSION["erro"] ) ?>




        <?php if (isset($_SESSION["successful"])) { ?>
            <p style="color:green; font-size:12px">
                <?php echo $_SESSION["successful"] ?>
            </p>
        <?php } unset($_SESSION["successful"] ) ?>




        <button type="submit" name="submit">Submit</button>





    </form>
</body>

</html>