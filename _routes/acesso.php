<?php

require_once("../_controllers/LoginController.php");

use Login\LoginController;


LoginController::validateLogin($_POST['user']);

?>