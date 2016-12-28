<?php
NameSpace App\Sys;
class Template {

    public $var = array();

    private $template_base;

    public function __construct() {
        header('X-Powered-By:a853868671@gmail.com');
        $this->template_base = BASE_DIR.APP_PATH.'/Views/';
    }

    public function assign($key,$value) {

        if ( is_array($key) ) {
            $this->var = $key + $this->var;
        }
        else {
            $this->var[$key] = $value;
        }
    }

    public function load($file) {

       extract($this->var); 
       include $this->template_base.$file.EXT;
       unset($this->var);

    }    


}