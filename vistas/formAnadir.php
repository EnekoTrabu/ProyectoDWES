<br>
<?php
if (Input::siEnviado("post")) {
    $errores = $validador->getErrores();

    if (!empty($errores)) {
        echo "<div class='alert alert-danger errores alert-dismissible fade show' role='alert'>";
        foreach ($errores as $campo => $mensajeError) {
            echo "<p>" . ucfirst($campo) . " - $mensajeError</p>\n";
        }
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";
    }
}
?>
<div class="row row-cols-1">
    <form class="form-horizontal" action="" method="POST">
        <fieldset>

            <!-- Form Name -->
            <legend>Añadir Nuevo Animal</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="nombre">Nombre</label>
                <div class="col-md-12">
                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" value="<?php echo Input::get('nombre') ?>">
                    <span class="help-block">Introduzca el nombre del animal</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="edad">Edad</label>
                <div class="col-md-12">
                    <input id="edad" name="edad" type="text" placeholder="Edad" class="form-control input-md" value="<?php echo Input::get('edad') ?>">
                    <span class="help-block">Introduzca la edad del animal</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="procedencia">Procedencia</label>
                <div class="col-md-12">
                    <input id="procedencia" name="procedencia" type="text" placeholder="Procedencia" class="form-control input-md" value="<?php echo Input::get('procedencia') ?>">
                    <span class="help-block">Introduzca la procedencia del animal</span>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="genero">Género</label>
                <div class="col-md-12">
                    <div class="radio">
                        <label for="genero-0">
                            <input type="radio" name="genero" id="genero-0" value="Macho" checked='checked'>
                            Macho
                        </label>
                    </div>
                    <div class="radio">
                        <label for="genero-1">
                            <input type="radio" name="genero" id="genero-1" value="Hembra" <?php if (Input::get('genero') == "Hembra") echo "checked='checked'" ?>>
                            Hembra
                        </label>
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="raza">Raza</label>
                <div class="col-md-12">
                    <input id="raza" name="raza" type="text" placeholder="Raza" class="form-control input-md" value="<?php echo Input::get('raza') ?>">
                    <span class="help-block">Introduzca la raza del animal</span>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="foto">Foto</label>
                <div class="col-md-12">
                    <input id="foto" name="foto" class="input-file" type="file">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="salud">Salud</label>
                <div class="col-md-12">
                    <select id="salud" name="salud" class="form-control">
                        <?php
                        if (Input::get('salud') == "Buena Salud") {
                            echo "<option value='Buena Salud' selected >Buena salud</option>";
                        } else {
                            echo "<option value='Buena Salud'>Buena salud</option>";
                        }

                        if (Input::get('salud') == "Mala Salud") {
                            echo "<option value='Mala Salud' selected >Mala salud</option>";
                        } else {
                            echo "<option value='Mala Salud'>Mala salud</option>";
                        }
                        ?>


                    </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="descripcion">Descripción</label>
                <div class="col-md-12">
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Introduzca una pequeña descripción del animal"><?php echo Input::get('descripcion') ?></textarea>
                </div>
            </div>

            <!-- Input oculto -->
            <!--<div class="form-group">
                <div class="col-md-12">
                    <input id="post" name="post" type="hidden" value="true" class="form-control input-md">
                </div>
            </div>-->

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="enviar"></label>
                <div class="col-md-12">
                    <button id="enviar" name="enviar" value="validar" class="btn btn-outline-dark btn-lg btn-block">Validar</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<br>

<?php
echo "<div class='resultado'>";
if (isset($resultado)) {
    echo $resultado;
}
echo "</div>";
include 'includes/pie.php';
?>