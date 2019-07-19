<?php $title = "Contact";
include "header_footer/header.php"; ?>

	<div id="divGlobal">
		<h1>Contact</h1>
		<form class="formContact" method="post" action="formulaire.php">
			<p><label>E-Mail</label><input type="text" name="email" /></p>
			<p><label>Text</label><input type="text" name="formulaire" /></p>
			<button type="submit">Envoyer</button>
		</form>
	</div>

<?php include "header_footer/footer.php"; ?>
	