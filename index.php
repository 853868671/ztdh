<?php
error_reporting(E_ALL & ~E_NOTICE & ~8192);

define("DEBUG",true); 

if ( defined("DEBUG") ) {
    if ( DEBUG ) {
        ini_set("display_errors","1");
    } else {
    	ini_set("display_errors","0");
    }
}

# 定义网站根路径
define('BASE_DIR',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");

# 定义项目路径
define('APP_PATH', 'App');

# 定义扩展名
define('EXT', '.php');

# 获取URI
define('PATH_URI', ltrim(parse_url($_SERVER['PATH_INFO'], PHP_URL_PATH),'/'));

# 定义public

define('__PUBLIC__', $_SERVER['HTTP_HOST'].'/Public');


require('bootstrap/run'.EXT);

?>