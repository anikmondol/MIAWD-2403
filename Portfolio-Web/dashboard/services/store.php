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



if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM services WHERE id='$status_id'";
    $connect = mysqli_query($db, $select_query);
    $services = mysqli_fetch_assoc($connect);

    if ($services['status'] == 'deactive') {
        $update_query = "UPDATE services SET status='active' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["active_status"] = "services status active successfully complete !!!";
        header("location: services.php");
    } else {
       
        $update_query = "UPDATE services SET status='deactive' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["deactive_status"] = "services status deactive successfully complete !!!";
        header("location: services.php");
    }

}



if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $icons = $_POST['icons'];

        $update_query = "UPDATE services SET title='$title', description='$description', icon='$icons' WHERE id='$id'";
        mysqli_query($db, $update_query);
        $_SESSION["create_done"] = "services update successfully complete !!!";
        header("location: services.php");
        
    }
}




?> 