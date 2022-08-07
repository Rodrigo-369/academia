<?php
namespace Login;

require_once("TreatmentController.php");


use TreatmentString\TreatString;

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

    }

}
?>