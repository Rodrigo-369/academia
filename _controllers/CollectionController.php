<?php

namespace Collection;

abstract class CollectionController {

    protected $collection = [];

    public function createCollection($array = array())
    {
        print_r($this->collection = $array);
    }

}


?>