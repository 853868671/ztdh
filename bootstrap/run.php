<?php
include_once "vendor/autoload.php";

$uri_data = explode('/', PATH_URI);


$arr_url =array(
	'controller' => 'Index',
	'method' => 'index',
	'parmers' => array(),
);


if(is_array($uri_data) && !empty($uri_data[0]))
{
	$arr_url['controller'] = $uri_data[0];

	$run = BASE_DIR.APP_PATH.'/Controllers/'.$arr_url['controller'].EXT;

	if(!file_exists($run))
	{
		echo '404 not found 1';//直接输出页面错误信息 
		exit(); 
	}
	
	include_once $run;	
	$fun = "App\\Controllers\\".$arr_url['controller'];
	$goto = new $fun;
	if (count($uri_data)>=2) {
		$arr_url['method'] = $uri_data[1];
		if(!method_exists($goto, $arr_url['method'])){
			echo '404 not found 2';//直接输出页面错误信息 
			exit;  
		}
	}
} else {
	$run = BASE_DIR.APP_PATH.'/Controllers/'.$arr_url['controller'].EXT;
	$fun = "App\\Controllers\\".$arr_url['controller'];
	$goto = new $fun;	
}

$goto->$arr_url['method']();


?>