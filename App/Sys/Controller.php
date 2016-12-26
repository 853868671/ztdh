<?php
NameSpace App\Sys;

use App\Sys\Template;
class Controller {

    protected $view ;

    public function __construct () {

        $this->view  = new Template();

    }



}