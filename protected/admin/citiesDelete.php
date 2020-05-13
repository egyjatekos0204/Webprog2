<?php
if($_SESSION['flags'] > 5){
	require_once DATABASE_CONTROLLER;

	$query = "DELETE FROM cities WHERE id = :id";
	$params = [':id' => $_GET['id']];
	if(!executeDML($query,$params))
	{
		echo 'Gebasz van!';
	}

	else {
		header('Location: index.php?P=admin');
	}

}
else {
	header('Location: index.php');
}
?>