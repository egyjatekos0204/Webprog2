<?php

if(empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home':
	if(!isset($_GET['V'])){
		require_once PROTECTED_DIR.'pages/home.php';

	}
	else {
		require_once PROTECTED_DIR.'pages/ettermek.php';
	}
	require_once PROTECTED_DIR.'pages/login.php';
	require_once PROTECTED_DIR.'pages/register.php';
	require_once PROTECTED_DIR.'database.php';
	break;

	case 'logout':
	session_destroy();
	header("Location: index.php?");
	die();
	break;


	case 'etlap':
	require_once PROTECTED_DIR.'pages/etlap.php';
	require_once PROTECTED_DIR.'pages/login.php';
	require_once PROTECTED_DIR.'pages/register.php';
	require_once PROTECTED_DIR.'database.php';
	break;

	case 'admin':
		if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
			require_once PROTECTED_DIR.'admin/adminIndex.php';
		}
		else{
			header('Location: index.php');
		}
		break;

	case 'restaurantEdit':
		if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
			require_once PROTECTED_DIR.'admin/restaurantEdit.php';
		}
		else{
			header('Location: index.php');
		}
	break;

	case 'restaurantDelete':
		if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
			require_once PROTECTED_DIR.'admin/restaurantDelete.php';
		}
		else{
			header('Location: index.php');
		}
	break;

	case 'citiesEdit':
	if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
		require_once PROTECTED_DIR.'admin/citiesEdit.php';
	}
	else{
		header('Location: index.php');
	}
	break;

	case 'citiesDelete':
	if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
		require_once PROTECTED_DIR.'admin/citiesDelete.php';
	}
	else{
		header('Location: index.php');
	}
	break;

	case 'userEdit':
	if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
		require_once PROTECTED_DIR.'admin/userEdit.php';
	}
	else{
		header('Location: index.php');
	}
	break;

	case 'userDelete':
	if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
		require_once PROTECTED_DIR.'admin/userDelete.php';
	}
	else{
		header('Location: index.php');
	}
	break;

	case 'userAdd':
	if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
		require_once PROTECTED_DIR.'admin/userAdd.php';
	}
	else{
		header('Location: index.php');
	}
	break;

	case 'settings':
	break;

	default:
		require_once PROTECTED_DIR.'pages/404.php';
	break;
	}

?>