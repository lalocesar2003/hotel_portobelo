<?php

Class ControladorRestaurante{


    static public function ctrMostrarRestaurante(){
        $tabla= "Restaurante";
        $respuesta = ModeloRestaurante::mdlMostrarRestaurante($tabla);
        return $respuesta;
        

    }

}