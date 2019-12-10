<br>
<div class="row">
    <?php
        
        if(isset($_GET['oculto'])){
         $oculto = $_GET['oculto'];
            if($oculto){
                echo $oculto;
                $_GET['oculto'] = false;
            }else{
                echo $oculto;   
            }
        }
        /*if(isset($_SESSION['valorTarjeta'])){
            foreach($_SESSION['valorTarjeta'] as $tarjeta){
                echo crearTarjeta($tarjeta['nombre'], $tarjeta['edad']);
            }
        }*/

    ?>
</div>
