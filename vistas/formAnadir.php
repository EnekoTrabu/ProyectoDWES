<br>
<div class="row row-cols-1">
    <form class="form-horizontal" action="index.php" method="GET">
        <fieldset>

            <!-- Form Name -->
            <legend>Añadir Nuevo Animal</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="nombre">Nombre</label>
                <div class="col-md-12">
                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
                    <span class="help-block">Introduzca el nombre del animal</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="edad">Edad</label>
                <div class="col-md-12">
                    <input id="edad" name="edad" type="text" placeholder="Edad" class="form-control input-md">
                    <span class="help-block">Introduzca la edad del animal</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="procedencia">Procedencia</label>
                <div class="col-md-12">
                    <input id="procedencia" name="procedencia" type="text" placeholder="Procedencia" class="form-control input-md">
                    <span class="help-block">Introduzca la procedencia del animal</span>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="genero">Género</label>
                <div class="col-md-12">
                    <div class="radio">
                        <label for="genero-0">
                            <input type="radio" name="genero" id="genero-0" value="Macho" checked="checked">
                            Macho
                        </label>
                    </div>
                    <div class="radio">
                        <label for="genero-1">
                            <input type="radio" name="genero" id="genero-1" value="Hembra">
                            Hembra
                        </label>
                    </div>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="tipo">Tipo de animal</label>
                <div class="col-md-12">
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="raza">Raza</label>
                <div class="col-md-12">
                    <input id="raza" name="raza" type="text" placeholder="Raza" class="form-control input-md">
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
                        <option value="buena">Buena salud</option>
                        <option value="mala">Mala salud</option>
                    </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="descripcion">Descripción</label>
                <div class="col-md-12">
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Introduzca una pequeña descripción del animal"></textarea>
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
                    <button id="enviar" name="enviar" value="hola" class="btn btn-outline-dark btn-lg btn-block">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<br>
<?php
include 'vistas/pie.php';
?>
