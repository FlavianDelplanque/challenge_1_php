<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title><?php if (empty($title)) { echo "Page défaut"; } else { echo $title; } ?></title>
</head>
<body>
<nav id="liens_header" class="liens_header_cacher">
	<a href="index.php">accueil</a>
	<a href="galerie.php">galerie</a>
	<a href="contact.php">contact</a>
</nav>
<header id="menu_burger">
	<a onclick="menuBurger()"><img src="img/ui/Hamburger_icon.png" id="icone_menu_burger"></a>
</header>
