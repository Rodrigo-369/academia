<?php
namespace Login;
require_once("CollectionController.php");
require_once("../_settings/ConfigurationController.php");

use Conf\ConfigurationController;
use Collection\CollectionController;

class LoginController {

    protected $user;
    protected $pass;
 
    public function validateLogin($u = array())
    {
        CollectionController::createCollection($u);
        $this->user = $u[0];
        $this->pass = $u[1];

        ConfigurationController::scapeCommands($this->user);
        $this->pass = ConfigurationController::scapeCommands($this->pass);

        $this->pass = ConfigurationController::md5Hash($this->pass);

        echo $this->pass;
    }

}


?>