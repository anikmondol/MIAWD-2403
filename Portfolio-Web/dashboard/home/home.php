<?php

include "../master/header.php";
include "../../config/database.php";

$users_query = "select * FROM users";
$users = mysqli_query($db, $users_query);
$result = mysqli_fetch_assoc($users);

?>


<!-- content start -->


<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Dashboard</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if (isset($_SESSION['temp_name'])) :  ?>
            <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title">Welcome Chief Mr. <span class="m-1"><?php echo $_SESSION['temp_name']; ?></span> </span>
                    <span class="alert-text">Email is <span class="m-1"><?php echo $_SESSION['auth_email']; ?></span> </span>
                </div>
            </div>
        <?php endif;
        unset($_SESSION['temp_name']); ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                User List
            </div>
            <div class="card-body" style="overflow-y: scroll; height: 300px;">
                <div class="example-content">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
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
                            $id = $_SESSION['auth_id'];
                            ?>

                            <?php foreach ($users as $user) :
                                if ($user['id'] == $id) {
                                    continue;
                                }
                            ?>
                                <tr>
                                    <th scope="row"><?= $number++ ?></th>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td>@mdo</td>
                                </tr>
                            <?php endforeach; endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- content end -->

<?php
include "../master/footer.php";
?>