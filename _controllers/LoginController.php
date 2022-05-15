<?php
namespace Login;
require_once("CollectionController.php");

use Collection\CollectionController;

class LoginController extends CollectionController {

    protected $user;
    protected $password;
 
    public function validateLogin($u = array())
    {
        //$this->user = $u[0];
        //$this->password = $u[1];

        //print_r($u);
        $this->createCollection($u);

        //return $res = $this->user . $this->password;
    }

}


?>