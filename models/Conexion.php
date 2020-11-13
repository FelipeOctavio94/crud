<?php

namespace models;


class Conexion
{
    public static $user = "u87nh7edmo5wf055";
    public static $pass = "WTpOmUQRHEQS4OBXTnYh";
    public static $URL = "mysql:host=bdip6o4xpnodzig2benr-mysql.services.clever-cloud.com;dbname=bdip6o4xpnodzig2benr";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
