<?php

namespace core;


class PdoConnection
{

    public static function connect($config){


        try {

            return new \PDO($config['database'].':host='.$config['host'].';dbname='.$config['dbname'],$config['username'],$config['password']);


        }
        catch (\PDOException  $err){
            echo($err->getMessage());
            die();
        }


    }


}