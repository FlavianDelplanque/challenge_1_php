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
<!-- 	<a href="galerie.php">galerie photo</a>
	<a href="contact.php">contact</a> -->
	<?php 
	$directory = dir(".");
	$nmbr = 0;
	while($entry = $directory->read()) {
	    if ($entry == "." || $entry == "..") {	    	
	    }
	    else {
	    	if (filetype($entry)=="file" && $entry != "formulaire.php" && $entry != "index.php") {
	    		$nmbr++;
	    		$nomEntry = explode(".",$entry);
	    		$ordreEntry = explode($nmbr, $nomEntry[0]);
	    		echo "<a href='".$entry."'>".$ordreEntry[1]."</a>";
	    	}
	    }
	}
	$directory->close();
	 ?>
</nav>
<header id="menu_burger">
	<a id="burger"><img src="img/ui/Hamburger_icon.png" id="icone_menu_burger"></a>
</header>
