<?php
include "../master/header.php";
include "../../public/fonts/fonts.php";
?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Portfolio Create</h1>
        </div>
    </div>
</div>
<!--Services Create -->
<div class="col-lg-9 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5>USER-PORTFOLIO</h5>
        </div>
        <div class="card-body">
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="example-content">
                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Project Sub-Title</label>
                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Project Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <picture class="d-block my-4">
                        <img  id="port_img" src="../../public/default/default1.jpg" alt="" style="width: 100%; height: 300px; object-fit:contain;">
                    </picture>

                    <label for="exampleInputEmail1" class="form-label"> Project Image</label>
                    <input onchange="document.getElementById('port_img').src= window.URL.createObjectURL(this.files[0])" type="file" name="image" class="form-control icon_value" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <!-- create_error start -->
                    <?php if (isset($_SESSION["create_error"])) :
                    ?>
                        <div id="emailHelp" class="form-text text-danger fs-6 mt-3"><?= $_SESSION["create_error"] ?></div>
                    <?php endif;
                    unset($_SESSION["create_error"]); ?>
                    <!-- create_error end -->
                    <div>
                        <button type="submit" name="create" class="btn btn-primary my-3"><i class="material-icons">refresh</i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "../master/footer.php";
?>