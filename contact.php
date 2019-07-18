<?php $title = "Contact";
include "header.php"; ?>

	<div id="divGlobal">
		<h1>Contact</h1>
		<form class="formContact" method="post" action="traitement.php">
		   <p><label>E-Mail</label><input type="text" name="email" /></p>
		</form>
		<form class="formContact" method="post" action="traitement.php">
		   <p><label>Text</label><input type="text" name="formulaire" /></p>
		</form>
		<button>Envoyer</button>
	</div>

<?php include "footer.php"; ?>
	