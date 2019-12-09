<?php
include 'includes/cabecera.php';
?>

<div class="container">
<br><br><br>
    <div class="row row-cols-1">
        <form class="form-horizontal">
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
    <br><br><br>
    <div class="row row-cols-1">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Concertar Visita</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="nombre">Nombre</label>
                    <div class="col-md-12">
                        <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
                        <span class="help-block">Introduzca su nombre</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="apellido">Apellido</label>
                    <div class="col-md-12">
                        <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">
                        <span class="help-block">Introduzca su apellido</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="correo">Correo</label>
                    <div class="col-md-12">
                        <input id="correo" name="correo" type="email" placeholder="Correo" class="form-control input-md">
                        <span class="help-block">introduzca su correo</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="telefono">Telefono</label>
                    <div class="col-md-12">
                        <input id="telefono" name="telefono" type="phone" placeholder="Telefono" class="form-control input-md">
                        <span class="help-block">Introduzca su telefono</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="cita">Cita</label>
                    <div class="col-md-12">
                        <input id="cita" name="cita" type="datetime-local" placeholder="Cita" class="form-control input-md">
                        <span class="help-block">Introduzca hora y fecha</span>
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
</div>
<?php
include 'includes/pie.php';
?>