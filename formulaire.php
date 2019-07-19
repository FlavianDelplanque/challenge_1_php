<?php 
$title = "formulaire";
include "header_footer/header.php";
echo "<div id='divGlobal'><h2>formulaire</h2>";
echo "<p>votre email est ".htmlspecialchars($_POST['email'])."</p>";
echo "<p>Votre message est ".htmlspecialchars($_POST['formulaire'])."</p>";
echo "<a href='2contact.php'><button>retour</button></a></div>"; 
include "header_footer/footer.php"; 
?> 