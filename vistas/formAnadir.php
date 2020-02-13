<br>
<?php
if(isset($_SESSION['idioma'])){
    $lang = $_SESSION["idioma"];
    include "idiomas/".$lang.".php";
}else{
    include "idiomas/cast.php";
}

if (Input::siEnviado("post")) {
    $errores = $validador->getErrores();

    if (!empty($errores)) {
        echo "<div class='alert alert-danger errores alert-dismissible fade show border border-danger' role='alert'>";
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
    <form class="form-horizontal formulario" action="" method="POST" enctype="multipart/form-data">
        <fieldset>

            <!-- Form Name -->
            <legend><?php echo $idioma['tituloForm'] ?></legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoChip']) ?>"><?php echo $idioma['campoChip'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoChip']) ?>" name="numchip" type="text" placeholder="00000000A" class="form-control input-md" maxlength="9" value="<?php echo Input::get('numchip') ?>">
                    <span class="help-block"><?php echo $idioma['descChip'] ?></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoNombre']) ?>"><?php echo $idioma['campoNombre'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoNombre']) ?>" name="nombre" type="text" placeholder="<?php echo $idioma['campoNombre'] ?>" class="form-control input-md" value="<?php echo Input::get('nombre') ?>">
                    <span class="help-block"><?php echo $idioma['descNombre'] ?></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoEdad']) ?>"><?php echo $idioma['campoEdad'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoEdad']) ?>" name="edad" type="text" placeholder="<?php echo $idioma['campoEdad'] ?>" class="form-control input-md" value="<?php echo Input::get('edad') ?>">
                    <span class="help-block"><?php echo $idioma['descEdad'] ?></span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoProcedencia']) ?>"><?php echo $idioma['campoProcedencia'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoProcedencia']) ?>" name="procedencia" type="text" placeholder="<?php echo $idioma['campoProcedencia'] ?>" class="form-control input-md" value="<?php echo Input::get('procedencia') ?>">
                    <span class="help-block"><?php echo $idioma['descProcedencia'] ?></span>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoGenero']) ?>"><?php echo $idioma['campoGenero'] ?></label>
                <div class="col-md-12" id="<?php echo strtolower($idioma['campoGenero']) ?>">
                    <div class="radio">
                        <label for="genero-0">
                            <input type="radio" name="genero" id="genero-0" value="Macho" <?php Utilidades::verificarBotones(Input::get('genero'), "Macho" ) ?>>
                            <?php echo $idioma['genero1'] ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label for="genero-1">
                            <input type="radio" name="genero" id="genero-1" value="Hembra" <?php Utilidades::verificarBotones(Input::get('genero'), "Hembra" ) ?>>
                            <?php echo $idioma['genero2'] ?>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoRaza']) ?>"><?php echo $idioma['campoRaza'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoRaza']) ?>" name="raza" type="text" placeholder="<?php echo $idioma['campoRaza'] ?>" class="form-control input-md" value="<?php echo Input::get('raza') ?>">
                    <span class="help-block"><?php echo $idioma['descRaza'] ?></span>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoFoto']) ?>"><?php echo $idioma['campoFoto'] ?></label>
                <div class="col-md-12">
                    <input id="<?php echo strtolower($idioma['campoFoto']) ?>" name="foto" class="input-file" type="file">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoSalud']) ?>"><?php echo $idioma['campoSalud'] ?></label>
                <div class="col-md-12">
                    <select id="<?php echo strtolower($idioma['campoSalud']) ?>" name="salud" class="form-control">
                        <?php
                        $valores = ["Buena Salud" => $idioma['salud1'], "Mala Salud" => $idioma['salud2']];
                        foreach ($valores as $clave => $val) {
                            echo "<option value='$clave'";
                            echo Utilidades::verificarLista(Input::get('salud'), $clave);
                            echo ">$val</option>";
                        }
                        ?>

                    </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="<?php echo strtolower($idioma['campoDescripcion']) ?>"><?php echo $idioma['campoDescripcion'] ?></label>
                <div class="col-md-12">
                    <textarea class="form-control" id="<?php echo strtolower($idioma['campoDescripcion']) ?>" name="descripcion" placeholder="<?php echo $idioma['descDescripcion'] ?>"><?php echo Input::get('descripcion') ?></textarea>
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
                    <button id="enviar" name="enviar" value="validar" class="btn btn-outline-dark btn-lg btn-block"><?php echo $idioma['campoEnviar'] ?></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<br>

<?php
if (isset($resultado)) {
    echo $resultado;
}
include 'includes/pie.php';
?>