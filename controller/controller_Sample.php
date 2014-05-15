<?php 
include 'db/database.php';

class mController {

	function about() {
		include 'model/aboutModel.php';
		$query = new aboutModel();
		$datas = $query->find('users', 'no=2');
		include_once dirname(__FILE__).'/../views/view/about.php';

	}

	function menu() {
		include_once dirname(__FILE__).'/../views/view/menu.php';
	}

	function environment() {
		include 'model/environmentModel.php';
		$query = new environmentModel();
		$datas = $query->all('menus');
		include_once dirname(__FILE__).'/../views/view/environment.php';
	}

	function environmentOut() {
		include_once dirname(__FILE__).'/../views/view/environmentOut.php';
	}

}

?>