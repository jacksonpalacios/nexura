<?php
include_once('./view/header.php');

?>
<div class="row">
    <div class="col-md-12" style="background: #eee"><h1>Editar</h1></div>
</div>
<form method="post">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="login" class=" control-label">Login</label>
            <input type="text" class="form-control" name="login" placeholder="Login"
                   value="<?= $user->login; ?>">
        </div>


        <div class="form-group col-md-6">
            <label for="name" class=" control-label">Nombre</label>
            <input class="form-control" name="name" placeholder="Nombre" value="<?= $user->name; ?>">
        </div>


        <div class="form-group col-md-6">
            <label for="age" class=" control-label">Edad</label>
            <input type="number" class="form-control" name="age" placeholder="Edad" value="<?= $user->age; ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="email" class=" control-label">Correo</label>
            <input class="form-control" name="email" placeholder="Correo" value="<?= $user->email; ?>">
        </div>


        <div class="form-group col-md-6">
            <label for="description" class=" control-label">Descripción</label>
            <input type="text" class="form-control" name="description" placeholder="Descripción" value="<?= $user->description; ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="gender" class=" control-label">Sexo</label>
            <input type="text" class="form-control" name="gender" placeholder="Descripción" value="<?= $user->gender; ?>">
        </div>

        <h5>Foto de perfil</h5>

        <input type="hidden" name="f" value="edit">
        <input type="hidden" name="mod" value="user">
        <input type="hidden" name="id" value="<?= $user->id; ?>">
        <button type="submit" class="btn btn-default btn-block">Guardar</button>
    </div>
</form>


<?php
include_once('./view/footer.php');
?>
