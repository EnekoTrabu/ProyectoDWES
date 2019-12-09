<?php
include 'includes/cabecera.php';
?>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Concertar Visita</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label>
            <div class="col-md-4">
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
                <span class="help-block">Introduzca su nombre</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="apellido">Apellido</label>
            <div class="col-md-4">
                <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">
                <span class="help-block">Introduzca su apellido</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="correo">Correo</label>
            <div class="col-md-4">
                <input id="correo" name="correo" type="email" placeholder="Correo" class="form-control input-md">
                <span class="help-block">introduzca su correo</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="telefono">Telefono</label>
            <div class="col-md-4">
                <input id="telefono" name="telefono" type="phone" placeholder="Telefono" class="form-control input-md">
                <span class="help-block">Introduzca su telefono</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cita">Cita</label>
            <div class="col-md-4">
                <input id="cita" name="cita" type="datetime-local" placeholder="Cita" class="form-control input-md">
                <span class="help-block">Introduzca hora y fecha</span>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="col-md-4">
                <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </fieldset>
</form>
<?php
include 'includes/pie.php';
?>