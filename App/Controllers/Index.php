<?php
NameSpace App\Controllers;

use App\Sys\Controller;
use App\Controllers\CrossDomain;
class Index extends Controller {

	public function index(){
		echo 'Hello Wrold';

		$a = CrossDomain::http('code');

		var_dump($a);

		$this->view->assign('key','first');

		$this->view->load('index');
	}

}
