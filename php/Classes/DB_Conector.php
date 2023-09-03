<?php

class DB_Conector
{

    public static function get_connection($HOST = "localhost", $DB_NAME = "mhs", $DB_USER = "root", $DB_PASSWORD = "")
    {
        $dsn = "mysql:host=" . $HOST . ";dbname=" . $DB_NAME;

        try {
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $connection = new PDO($dsn, $DB_USER, $DB_PASSWORD, $option);
            return $connection;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}