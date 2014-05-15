<?php 
include 'db/database.php';

class mController {

	function Welcome() {
		include_once dirname(__FILE__).'/../views/view/welcome.php';
	}

}

?>