<?php
	

	$b = isset($_GET['d'])? $_GET['d']: "";
	switch($b){
		case 'login':
			$title  ="login";
			$content = "login.php";
			break;
		case 'home':
				$title  ="login";
				$content = "home.php";
				break;
		case 'registry':
				$title  ="registry";
				$content = "registration.php";
				break;
		case 'welcome':
				$title  ="welcome";
				$content = "welcome.php";
				break;
		case 'logout':
				$content = logout();
				break;
		default:
			$content = 'home.php';
			break;
	}
	
	$d = isset($_GET['id'])? $_GET['id']: "";
	switch($d){
		case 'checked':
			include('includes/logged.php');
		break;
	default:
			include('includes/template.php');
	}
	
	
?>