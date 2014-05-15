<?php
	include 'dbconfig.php';
	
	class query {

		function __construct() {
			$link = mysql_connect($Options['domain'], $Options['user'], $Options['password']);
			mysql_select_db('test', $link);
		}

	}

?>