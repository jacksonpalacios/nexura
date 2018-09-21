<form method="post" enctype="multipart/form-data">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="code" class=" control-label">Número del contrato</label>
            <input id="code" type="text" class="form-control" name="code" placeholder="Número"
                   value="<?= $contract->code; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="estimate_budget" class=" control-label">Presuspuesto</label>
            <input id="estimate_budget" type="number" class="form-control" name="estimate_budget" placeholder="Presupuesto"
                   value="<?= $contract->estimate_budget; ?>">
        </div>

        <div class="form-group col-md-4">
            <label for="end_date" class=" control-label">Fecha estimada de finalización</label>
            <input id="end_date" type="date" class="form-control" name="end_date"
                   placeholder="Fecha Finalización" >
        </div>
        <div class="form-group col-md-2">
            <label for="end_time" class=" control-label">Hora Finalización</label>
            <input id="end_time" type="time" class="form-control" name="end_time"
                   placeholder="Fecha Finalización" >
        </div>
        <div class="form-group col-md-4">
            <label for="start_date" class=" control-label">Fecha de publicación</label>
            <input id="start_date" type="date" class="form-control" name="start_date"
                   placeholder="Fecha Finalización" value="<?= $contract->start_date; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="start_time" class=" control-label">Hora de Publicación</label>
            <input id="start_time" type="time" class="form-control" name="start_time"
                   placeholder="Fecha Finalización" >
        </div>
        <div class="form-group col-md-6">
            <label for="type_contract">Tipo Contrato</label>
            <select multiple class="form-control" id="type_contract" name="type_contract">
                <option value="1">Jurídico</option>
                <option value="2">Laboral</option>
                <option value="3">Interventoría</option>
                <option value="4">Asesoría</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="object_contract">Objeto del contrato</label>
            <textarea class="form-control" id="object_contract" name="object_contract" rows="4" placeholder="Objeto"><?= $contract->object_contract; ?></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="secretary">Secretaría</label>
            <select class="form-control" id="secretary" name="secretary">
                <option value="0">Seleccionar</option>
                <option value="1">ONG</option>
                <option value="2">FAA</option>
                <option value="3">ERR</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="file">Seleccionar Archivos</label>
            <div class="custom-file">
                <input type="file" name="file[]" class="custom-file-input" id="file" multiple>
                <label  class="custom-file-label" for="file">Seleccionar Archivo</label>
            </div>
        </div>

        <button type="submit" class="btn btn-default btn-block" id="btn_save_contracts">Guardar</button>

    </div>

</form>