<?php
include_once('./view/header.php');
if (isset($data)) {
    $user = $data[0];
    ?>

    <div class="row">
        <div class="col-md-12">
            <h1>Nombre: <?= $user->name; ?></h1>
        </div>
    </div>

    <?php
}
include_once('./view/footer.php');
?>
