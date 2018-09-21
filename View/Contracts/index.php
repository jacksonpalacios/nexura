<?php
include_once('./view/header.php');
?>

<div class="row">
    <div class="col-md-12" style="padding-left: 20px; ">
        <h1 style="text-align: center;">Contratos</h1>
        <hr>
    </div>
    <div class="col-md-12">
        <br>
        <strong>Información relacionada a los contratos:</strong>
        <div class="table-responsive" style="padding-top: 10px;">
            <table class="table table-bordered">
                <theader>
                    <tr>
                        <td>Número</td>
                        <td>Objeto</td>
                        <td>Presupuesto</td>
                        <td>Fecha estimada de finalización</td>
                        <td>Tipo</td>
                        <td>Fecha y hora de publicación</td>
                        <td>Secretaría</td>
                        <td>Acciones</td>
                    </tr>
                </theader>
                <tbody>
                <?php

                foreach ($contracts as $contract) {
                    echo '<tr>';
                    echo '<td><a href="#'.$contract->id.'">'. $contract->code . '</a></td>';
                    echo '<td>' . $contract->object_contract . '</td>';
                    echo '<td>' . $contract->estimate_budget . '</td>';
                    echo '<td>' . $contract->end_date. '</td>';
                    echo '<td>' . $contract->type_contract . '</td>';
                    echo '<td>' . $contract->start_date . '</td>';
                    echo '<td>' . $contract->secretary . '</td>';
                    echo '<td> <a href="#"> <i class="fas fa-trash-alt"></i></a> <a href="#'.$contract->id.'"> <i class="far fa-edit"></i></a></td>';
                    echo '</tr>';
                }

                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
include_once('./view/footer.php');
?>
