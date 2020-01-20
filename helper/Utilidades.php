<?php
    class Utilidades{
        public static function verificarBotones($valor, $valor_menu){
            if($valor == $valor_menu){
                echo 'checked="checked"';
            }
        }

        public static function verificarLista($valor, $valor_menu){
            if($valor == $valor_menu){
                echo 'selected="selected"';
            }
        }
    }
?>