<?php

include "../master/header.php";
include "../../config/database.php";

$services_query = "SELECT * FROM services";
$services = mysqli_query($db, $services_query);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Services Page</h1>
        </div>
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
    <div class="col-9 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>
                    services
                </h3>
                <a  href="./create.php" name="image_btn" class="btn btn-primary my-3"><i class="material-icons">add</i>Create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $number = 1;
                            foreach ($services as $service) :  
                            ?>
                                <tr>
                                    <th scope="row"><?= $number++ ?></th>
                                    <td><i class="fa-3x <?= $service['icon'] ?>"></i></td>
                                    <td><?= $service['title'] ?></td>
                                    <td><?= $service['description'] ?></td>
                                    <td>
                                        <a href="./store.php?id=<?= $service['id'] ?>">
                                            <i class="fa-2x text-danger fa fa-trash-o "></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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