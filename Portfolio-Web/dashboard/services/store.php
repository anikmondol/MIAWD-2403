<?php

session_start();
include '../../config/database.php';


if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icons = $_POST['icons'];

    if (!$title && !$description && !$icons) {
        $_SESSION["create_error"] = "something error try more !!!";
        header("location: create.php");
    } else {
        if ($title && $description && $icons) {
            $query = "INSERT INTO services (title,description,icon) VALUES ('$title','$description','$icons')";
            mysqli_query($db, $query);
            $_SESSION["create_done"] = "new service create successfully !!!";
            header("location: services.php");
        }
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM services WHERE id='$id'";
    mysqli_query($db, $query);
    $_SESSION["delete_done"] = "old service  delete successfully !!!";
            header("location: services.php");

}



?>
