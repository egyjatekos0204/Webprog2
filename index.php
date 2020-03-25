<?php require_once config.php ?>

<!DOCTYPE html>
<html>
<head>
	<title>Webshop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= PUBLIC_DIR.'style.css'?>">


</head>
<body>

	<header><?php include_once PROTECTED_DIR."header.php" ?></header>
	<nav><?php require_once PROTECTED_DIR."navbar.php" ?></nav>
	<content></content>
	<footer><?php include_once PROTECTED_DIR."footer.php" ?></footer>


</body>
</html>