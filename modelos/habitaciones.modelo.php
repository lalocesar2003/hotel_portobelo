<?php

require_once "conexion.php";


Class ModeloHabitaciones{

    static public function mdlMostrarHabitaciones($tabla1,$tabla2,$valor){
        $stmt= Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id = $tabla2.tipo WHERE ruta =:ruta");
        $stmt -> bindParam(":ruta",$valor,PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll();
        

    }


}