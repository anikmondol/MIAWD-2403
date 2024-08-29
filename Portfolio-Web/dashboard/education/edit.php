<?php
include "../master/header.php";


if (isset($_GET['edit_id'])) {
    $id =  $_GET['edit_id'];


    $education_read = "SELECT * FROM educations WHERE id='$id'";
    $educations = mysqli_query($db, $education_read);
    $education = mysqli_fetch_assoc($educations);

}




?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Education Insert</h1>
        </div>
    </div>
</div>
<!--Services Create -->
<div class="col-lg-9 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5 class="text-text-uppercase">USER-Education</h5>
        </div>
        <div class="card-body">
            <form action="store.php?edit_id=<?= $education['id'] ?>" method="post">
                <div class="example-content">
                    <label for="exampleInputEmail1" class="form-label">Education Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $education['title'] ?>">

                    <label for="exampleInputEmail1" class="form-label">Education Year</label>
                    <textarea type="text" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><?= $education['year']; ?></textarea>

                    <label for="exampleInputEmail1" class="form-label">Education Ratio/Parsentage</label>
                    <!-- <input type="text" name="ratio" class="form-control hudai" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                    <select name="ration" class="form-select">
                        <option style="height: 100px !important;" value="0">Select Your Ratio</option>
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <option value="<?= $i ?>">
                                <?= $i ?> %
                            </option>
                        <?php endfor; ?>
                    </select>
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