<?php

include "../master/header.php";
?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Links</h1>
        </div>
    </div>
</div>

<div class="row">

   <!-- password update start -->
    <div class="col-md-6">
        <div class="card" style="overflow-y: scroll; height: 500px;">
            <div class="card-header">
                USER-PASSWORD
            </div>
            <div class="card-body">
                <form action="link_manage.php" method="post">
                    <div class="example-content">

                        <label for="exampleInputEmail1" class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control my-1" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Github</label>
                        <input type="text" name="github" class="form-control my-1" id="exampleInputEmail1" aria-describedby="emailHelp">


                        <label for="exampleInputEmail1" class="form-label">linkedin</label>
                        <input type="text" name="linkedin" class="form-control my-1" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Whatsapp</label>
                        <input type="text" name="whatsapp" class="form-control my-1" id="exampleInputEmail1" aria-describedby="emailHelp">


                        <div>
                            <button type="submit" name="link_btn" class="btn btn-primary my-3"><i class="material-icons">refresh</i>Update</button>
                        </div>

                         <!-- link_update start -->
                         <?php if (isset($_SESSION["link_update"])) :
                        ?>
                            <div id="emailHelp" class="form-text text-danger fs-6 mt-3"><?= $_SESSION["link_update"] ?></div>
                        <?php endif;
                        unset($_SESSION["link_update"]); ?>
                        <!-- link_update end -->

                        <!-- old_password_update start -->
                        <?php if (isset($_SESSION["old_password_update"])) :
                        ?>
                            <div id="emailHelp" class="form-text text-success fs-6 mt-3"><?= $_SESSION["old_password_update"] ?></div>
                        <?php endif;
                        unset($_SESSION["old_password_update"]); ?>
                        <!-- old_password_update end -->

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- password update end -->

</div>


<?php
include "../master/footer.php";
?>