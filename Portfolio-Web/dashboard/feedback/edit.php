<?php
include "../master/header.php";
include "../../public/fonts/fonts.php";


if (isset($_GET['edit'])) {
    $id =  $_GET['edit'];

    $select_query = "SELECT * FROM feedbacks WHERE id='$id'";
    $connect = mysqli_query($db, $select_query);
    $feedback = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Feedbacks Edit Page</h1>
        </div>
    </div>
</div>
<!--feedbacks Create -->
<div class="col-lg-9 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5>USER-EDIT</h5>
        </div>
        <div class="card-body">
            <form action="store.php?edit_id=<?= $feedback['id'] ?>" method="post">
                <div class="example-content">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $feedback['title']; ?>">

                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> <?= $feedback['description']; ?>" </textarea>

                    <label for="exampleInputEmail1" class="form-label">Icons</label>
                    <input readonly type="text" name="icons" class="form-control icon_value" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $feedback['icon']; ?>">

                    <div class="card my-3">
                        <div class="card-body" style="overflow-y: scroll; height:300px;">
                            <div class="fa-2x">
                                <?php foreach ($fonts as $font) : ?>
                                    <span class="m-2">
                                        <i class=" <?= $font ?>" onclick="myFun(event)"></i>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                    <!-- create_error start -->
                    <?php if (isset($_SESSION["create_error"])) :
                    ?>
                        <div id="emailHelp" class="form-text text-danger fs-6 mt-3"><?= $_SESSION["create_error"] ?></div>
                    <?php endif;
                    unset($_SESSION["create_error"]); ?>
                    <!-- create_error end -->
                    <div>
                        <button type="submit" name="update" class="btn btn-primary my-3"><i class="material-icons">refresh</i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let icon_value = document.querySelector('.icon_value');

    function myFun(e) {
        icon_value.value = e.target.classList.value

    }
</script>

<?php
include "../master/footer.php";
?>