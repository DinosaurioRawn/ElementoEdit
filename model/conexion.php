<?php
class conexion {

    //public static function dbmysql() {
    public static function dbmysql() {

        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        //igual aqui va tu base de datos en vez de demo1uac
        $db_db = 'demo1uac';

        $mysqli = @new mysqli(
                $db_host,
                $db_user,
                $db_password,
                $db_db
                );

        if ($mysqli->connect_error) {
            echo 'La conexión a la base de datos de MYSQL No es correcta.';
            echo 'Errno: '.$mysqli->connect_errno;
            echo '<br>';
            echo 'Error: '.$mysqli->connect_error;
            exit();
        }
        return $mysqli;

        
    }

}
