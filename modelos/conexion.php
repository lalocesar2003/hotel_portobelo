<?php
class Conexion {
    static public function conectar() {
        // Reemplaza estos valores con los detalles de tu servidor remoto
        $host = 'bzveze7eun5b97h90la5-mysql.services.clever-cloud.com';  // Por ejemplo: 'mi-servidor.db.com'
        $dbname = 'bzveze7eun5b97h90la5';   // Por ejemplo: 'reservas-hotel'
        $username = 'uicumwppy1nujopx';                 // Usuario con acceso a la base de datos
        $password = 'WlDn5B5YgZGePY9NRs5z';              // Contraseña del usuario

        // Configura la conexión a la base de datos con PDO
        try {
            $link = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
