<?php

namespace Collection;

require_once("../_model/UserModel.php");

//use UserModel\UserModel;

class CollectionController {

    static public $collection = [];

    public static function createCollection($array = array()):array
    {
        /*
            Este método servirá para guardar dados em array para qualquer tipo de coleção de dados
        */

        if(!is_array($array))
        {
            echo "Erro";
        }
       return self::$collection = $array;
    }

}


?>