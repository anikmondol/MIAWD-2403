<?php

include "../master/header.php";
include "../../config/database.php";

$feedbacks_query = "SELECT * FROM feedbacks";
$feedbacks = mysqli_query($db, $feedbacks_query);
$result = mysqli_fetch_array($feedbacks);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Feedback Page</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['create_error'])) :  ?>
            <div class="alert alert-custom d-flex align-items-center" role="alert">
                <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <?= $_SESSION["create_error"]; ?>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['create_error']); ?>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['create_done'])) :  ?>
            <div class="alert alert-custom d-flex align-items-center" role="alert">
            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <?= $_SESSION["create_done"]; ?>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['create_done']); ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['active_status'])) :  ?>
            <div class="alert alert-custom d-flex align-items-center" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">notifications_active</i></div>
                <div class="alert-content">
                    <?= $_SESSION["active_status"]; ?>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['active_status']); ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['deactive_status'])) :  ?>
            <div class="alert alert-custom d-flex align-items-center" role="alert">
                <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">notifications_off</i></div>
                <div class="alert-content">
                    <?= $_SESSION["deactive_status"]; ?>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['deactive_status']); ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['delete_done'])) :  ?>
            <div class="alert alert-custom d-flex align-items-center" role="alert">
                <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">close</i></div>
                <div class="alert-content">
                    <?= $_SESSION["delete_done"]; ?>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['delete_done']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-9 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>
                    Feedback
                </h3>
                <a href="./create.php" name="image_btn" class="btn btn-primary my-3"><i class="material-icons">add</i>Create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            if (empty($result)):
                            ?>
                                <tr>
                                    <th colspan="5" class="text-center text-danger">
                                        No data found!!
                                    </th>
                                </tr>
                                <?php
                            else:
                                foreach ($feedbacks as $feedback) :
                                ?>
                                    <tr>
                                        <th scope="row"><?= $number++ ?></th>
                                        <td><i class="fa-3x <?= $feedback['icon'] ?>"></i></td>
                                        <td><?= $feedback['title'] ?></td>
                                        <td>
                                            <a href="store.php?status_id=<?= $feedback['id'] ?>" class=" p-2 <?= ($feedback['status'] == 'deactive') ? 'badge bg-danger text-white' : 'badge bg-success text-white'; ?>">
                                                <?= $feedback['status'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-evenly align-items-center">
                                                <a href="./edit.php?edit=<?= $feedback['id'] ?>">
                                                    <i class="fa-2x text-info fa fa-chain"></i>
                                                </a>
                                                <a href="./store.php?id=<?= $feedback['id'] ?>">
                                                    <i class="fa-2x text-danger fa fa-trash-o "></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php endforeach;
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "../master/footer.php";

?>