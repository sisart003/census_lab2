<?php include 'templates/header.php'; ?>


<div class="row">
    <div class="col-md-2">
        <?php include 'templates/sidebar.php'; ?>
    </div>

    <div class="col-md-8 my-4 mx-auto animate__animated animate__zoomInDown">

        <div class="alert alert-danger" role="alert">
            <small>This is Delete Section, it will delete all your Data.
                So make sure, you import all your data in Microsoft Excel first.</small>
        </div>
        <a href="#" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> &nbsp;Delete All Your Data</a>

    </div>

    <?php include 'templates/footer.php'; ?>