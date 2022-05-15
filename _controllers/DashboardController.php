<?php

namespace Dashboard;

class DashboardController {

    protected $header;
    protected $navbar;
    protected $content;
    protected $footer;

    public function typeUser($user)
    {
        
    }

    public function typeNavbar()
    {
        $this->navbar = require_once("_structure/navbar.php");

        return $this->navbar;
    }

    public function header()
    {
        $this->header = require_once("_structure/header.php");

        return $this->header;
    }

    public function content($content)
    {
        $this->content = require_once("_structure/$content.php");

        return $this->content;
    }

    public function footer()
    {
        $this->footer = require_once("_structure/footer.php");

        return $this->footer;
    }

    public function run()
    {
        $this->header();
        $this->typeNavbar();
        $this->content("estrutura");
        $this->footer();
    }
}


?>