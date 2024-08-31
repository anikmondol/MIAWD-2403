<?php

session_start();
include '../../config/database.php';


if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icons = $_POST['icons'];

    if (!$title || !$description || !$icons) {
        $_SESSION["create_error"] = "something error try more !!!";
        header("location: feedback.php");
    } else {
        if ($title && $description && $icons) {
            $query = "INSERT INTO feedbacks (title,description,icon) VALUES ('$title','$description','$icons')";
            mysqli_query($db, $query);
            $_SESSION["create_done"] = "new feedback create successfully !!!";
            header("location: feedback.php");
        }
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "DELETE FROM feedbacks WHERE id='$id'";
    mysqli_query($db, $query);
    $_SESSION["delete_done"] = "old service  delete successfully !!!";
    header("location: feedback.php");
}



if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM feedbacks WHERE id='$status_id'";
    $connect = mysqli_query($db, $select_query);
    $services = mysqli_fetch_assoc($connect);

    if ($services['status'] == 'deactive') {
        $update_query = "UPDATE feedbacks SET status='active' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["active_status"] = "feedback status active successfully complete !!!";
        header("location: feedback.php");
    } else {
       
        $update_query = "UPDATE feedbacks SET status='deactive' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["deactive_status"] = "feedback status deactive successfully complete !!!";
        header("location: feedback.php");
    }

}



if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $icons = $_POST['icons'];

        $update_query = "UPDATE feedbacks SET title='$title', description='$description', icon='$icons' WHERE id='$id'";
        mysqli_query($db, $update_query);
        $_SESSION["create_done"] = "feedback update successfully complete !!!";
        header("location: feedback.php");
        
    }
}




?> 