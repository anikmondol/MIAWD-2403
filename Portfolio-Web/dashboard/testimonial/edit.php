<?php
include "../master/header.php";
include "../../public/fonts/fonts.php";


if (isset($_GET['edit_id'])) {
    $id =  $_GET['edit_id'];

    $select_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db, $select_query);
    $testimonial = mysqli_fetch_assoc($connect);
}


?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1 class="uppercase">testimonial Update</h1>
        </div>
    </div>
</div>
<!--testimonial update -->
<div class="col-lg-9 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5>USER-testimonial</h5>
        </div>
        <div class="card-body">
            <form action="store.php?edit_id=<?= $testimonial['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="example-content">
                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $testimonial['title']; ?>"

                        <label for="exampleInputEmail1" class="form-label">Project Sub-Title</label>
                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $testimonial['subtitle']; ?>"

                        <label for="exampleInputEmail1" class="form-label">Project Description</label>

                    <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><?= $testimonial['description']; ?></textarea>

                    <picture class="d-block my-4">
                        <img id="port_img" src="../../public/testimonial/<?= $testimonial['image']; ?>" alt="" style="width: 100%; height: 300px; object-fit:contain;">
                    </picture>

                    <label for="exampleInputEmail1" class="form-label"> Project Image</label>
                    <input onchange="document.getElementById('port_img').src= window.URL.createObjectURL(this.files[0])" type="file" name="image" class="form-control icon_value" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <div>
                        <button type="submit" name="update" class="btn btn-primary my-3"><i class="material-icons">refresh</i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "../master/footer.php";
?>