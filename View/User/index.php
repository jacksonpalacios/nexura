<?php
include_once('./view/header.php');
?>


    <div class="row">
    <div class="col-md-12" style="padding-left: 20px; ">
        <h1 style="text-align: center;">Usuarios</h1>
        <hr>
    </div>

    <div class="col-md-12">

        <!--<a href="/contracts/add" class="btn btn-outline-success my-2 my-sm-0" type="button">Agregar Contratos</a> </div>-->

        <!-- Button trigger modal -->
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Crear contratos
            </button>
        </div>

        <div class="col-md-12">
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <theader>
                        <tr>
                            <td>Login</td>
                            <td>Nombre</td>
                            <td>Edad</td>
                            <td>Email</td>
                            <td>Descripción</td>
                            <td>Sexo</td>
                            <td>Acción</td>
                        </tr>
                    </theader>
                    <tbody>
                    <?php
                    foreach ($users as $user) {
                        echo '<tr>';
                        echo '<td><a href="/?mod=user&f=find&id=' . $user->id . '">' . $user->login . '</a></td>';
                        echo '<td>' . $user->name . '</td>';
                        echo '<td>' . $user->age . '</td>';
                        echo '<td>' . $user->email . '</td>';
                        echo '<td>' . $user->description . '</td>';
                        echo '<td>' . $user->gender . '</td>';
                        echo '<td> <a href=""> <i class="fas fa-trash-alt"></i></a> <a href="/user/edit/' . $user->id . '"> <i class="far fa-edit"></i></a></td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            include_once('./view/Contracts/form.php');
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


<?php
include_once('./view/footer.php');
?>