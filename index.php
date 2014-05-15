<?php $_POST['fromIndex'] = "Im,Index"; //防止觀察頁面使用?>
<?php include_once 'config/config.php'; ?>
<?php include_once 'views/layout/header.html'; ?>
<?php include_once 'controller/controller.php'; ?>
<?php
	$page = $_REQUEST['act'];
	$mainController = new mController();
	$mainController->$page();
?>
<?php include_once 'views/layout/footer.html'; ?>




<!--null
<?php/*
	$page = $_REQUEST['act'];
	if($page == '') {
		$page = 'about';
	}
	if(is_file('views/view/'.$page.'.php')) {
		include_once 'views/view/'.$page.'.php';
	} else {
		include_once 'assests/404.html';
	}*/
?>
-->