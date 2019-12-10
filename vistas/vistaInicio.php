<br>
<div class="row">
    <?php
        
        if(isset($_SESSION['valorTarjeta'])){
            foreach($_SESSION['valorTarjeta'] as $tarjeta){
                echo crearTarjeta($tarjeta['nombre'], $tarjeta['edad']);
            }
        }

    ?>
</div>