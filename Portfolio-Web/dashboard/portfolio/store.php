<?php

session_start();
include '../../config/database.php';


if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];


    $image = $_FILES['image']['name'];
    $tmp_img = $_FILES['image']['tmp_name'];




    if (!$image || !$subtitle || !$title || !$description) {
        $_SESSION['port_error'] = "Image Field is Required!!";
        header("location: portfolio.php");
    } else {
        if ($image && $subtitle && $title && $description) {
            $explode = explode('.', $image);
            $extension = end($explode);
            $custom_name_img = $_SESSION['auth_id'] . '-' . $title . '-' . date("d-m-Y") . "." . $extension;
            $local_path = "../../public/portfolio/" . $custom_name_img;

            if (move_uploaded_file($tmp_img, $local_path)) {

                $query = "INSERT INTO portfolios (title,subtitle,description,image) VALUES ('$title','$subtitle','$description','$custom_name_img')";
                mysqli_query($db, $query);
                $_SESSION["port_create"] = "new portfolio create successfully !!!";
                header("location: portfolio.php");
            } else {
                $_SESSION["port_error"] = "something error !!!";
                header("location: portfolio.php");
            }
        }
    }
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM portfolios WHERE id='$status_id'";
    $connect = mysqli_query($db, $select_query);
    $port = mysqli_fetch_assoc($connect);

    if ($port['status'] == 'deactive') {
        $update_query = "UPDATE portfolios SET status='active' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["active_status"] = "portfolios status active successfully complete !!!";
        header("location: portfolio.php");
    } else {

        $update_query = "UPDATE portfolios SET status='deactive' WHERE id='$status_id'";
        mysqli_query($db, $update_query);
        $_SESSION["deactive_status"] = "portfolios status deactive successfully complete !!!";
        header("location: portfolio.php");
    }
}



if (isset($_GET['delate_id'])) {
    $id = $_GET['delate_id'];

    $select_port = "SELECT * FROM portfolios WHERE id='$id'";
    $connectdb = mysqli_query($db, $select_port);
    $port = mysqli_fetch_assoc($connectdb);

    if ($port['image']) {
        $old_img = $port['image'];
        $old_path = "../../public/portfolio/" . $old_img;

        if (file_exists($old_path)) {
            unlink($old_path);
        }

        $query = "DELETE FROM portfolios WHERE id='$id'";
        mysqli_query($db, $query);
        $_SESSION["delete_done"] = "portfolio delete successful !!!";
        header("location: portfolio.php");
    }
}


if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];

        $image = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];



        if ($image && $subtitle && $title && $description) {
            $select_port = "SELECT * FROM portfolios WHERE id='$id'";
            $connectdb = mysqli_query($db, $select_port);
            $port = mysqli_fetch_assoc($connectdb);

            if ($port['image']) {
                $old_img = $port['image'];
                $old_path = "../../public/portfolio/" . $old_img;
                if (file_exists($old_path)) {
                    unlink($old_path);
                }
            }
            $explode = explode('.', $image);
            $extension = end($explode);
            $custom_name_img = $_SESSION['auth_id'] . '-' . $title . '-' . date("d-m-Y") . "." . $extension;
            $local_path = "../../public/portfolio/" . $custom_name_img;

            if (move_uploaded_file($tmp_img, $local_path)) {

                $query = "UPDATE portfolios SET title='$title',subtitle='$subtitle',description='$description',image='$custom_name_img' WHERE id='$id'";
                mysqli_query($db, $query);
                $_SESSION['port_create'] = "portfolio update successfully complete";
                header('location: portfolio.php');
            }
        } else {
            $query = "UPDATE portfolios SET title='$title',subtitle='$subtitle',description='$description' WHERE id='$id'";
            mysqli_query($db, $query);
            $_SESSION['port_create'] = "portfolio update successfully complete";
            header('location: portfolio.php');
        }
    }
}




?>