<?php
	include_once 'db/database.php';

	class aboutModel {

		function __construct() {
		}

		function all($table) {
			$db = new query();
			$query = 'SELECT * FROM '.$table;
			$result = mysql_query($query);
			return $result;
			mysql_close($db);
		}

		function find($table, $where) {
			$id = $_REQUEST['id'];
			$db = new query();
			$query = 'SELECT * FROM '.$table.' WHERE no='. $id;
			$result = mysql_query($query);
			return $result;
			mysql_close($db);
		}

	}
?>