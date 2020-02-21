<?php

namespace Core;
use App\Config;
use PDO;
use PDOException;
abstract class Model{
    protected static function getDB()
    {
        global $db;
        $db = null;

        if($db === null){
            try {
                $dbs = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME ;
                $db = new PDO($dbs, Config::DB_USER, Config::DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>