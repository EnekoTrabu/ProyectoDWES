<?php
include 'vistas/cabecera.php';
?>
<br>
<div class="row row-cols-1">
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Formulario Autentificación</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="usuario">Usuario</label>
                <div class="col-md-12">
                    <input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control input-md">
                    <span class="help-block">Introduzca nombre de usuario</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="contraseña">Contraseña</label>
                <div class="col-md-12">
                    <input id="contraseña" name="contraseña" type="text" placeholder="Contraseña" class="form-control input-md">
                    <span class="help-block">Introduzca la contraseña</span>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="enviar"></label>
                <div class="col-md-12">
                    <button id="enviar" name="enviar" class="btn btn-outline-dark btn-lg btn-block">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<br>
<?php
include 'vistas/pie.php';
?>