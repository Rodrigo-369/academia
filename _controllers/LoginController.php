<?php
namespace Login;

require_once("TreatmentController.php");
require_once("../_model/ModelUserController.php");

use TreatmentString\TreatString;
use ModelUser\ModelUserController;
/* function vd($v){
    var_dump($v);
} */

class LoginController extends TreatString {

    private $user = [];
 
    static public function validateLogin($u = array())
    {

        $user = TreatString::escapeCommand($u);
        
        $user = TreatString::hashString($user);
        
        $user = TreatString::removeSpace($user);

        $mUser = new ModelUserController();

        $r = $mUser->credentialUser($u);
        print_r($r);

    }

}
?>