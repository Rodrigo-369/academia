<?php

namespace User;

class UserController {

    protected $name_user;
    protected $level_user;

    public function getSession($user, $level)
    {
        session_start();

        $this->name_user = $_SESSION['usuario'] = $user;
        $this->level_user = $_SESSION['funcao'] = $level;

    }

}


?>