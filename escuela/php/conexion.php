<?php
class Conexion extends PDO{
    public function __construct($file){
        try{
            if (!$settings = parse_ini_file($file, TRUE)) {
                throw new Exception('No se puede abrir el archivo');
            }
            $dns = $settings['database']['driver']
                .':host='.$settings['database']['host']
                .';port='.$settings['database']['port']
                .';dbname='.$settings['database']['schema']
                .';charset='.$settings['database']['charset'];
            parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}