<?php $title = "Gallerie photo";
include "header_footer/header.php"; ?>

	<div id="divGlobal">
		<h1>Gallerie photo</h1>
		<div id="divGaleriePhoto">
		<?php 
		$directory = dir("img/galerie_photo/");
		while($entry = $directory->read()) {
		    if ($entry == "." || $entry == "..") {
		    	
		    }
		    else {
		    	echo "<img class='imgGalerie' src='img/galerie_photo/".$entry."'alt='".$entry."'>";
		    }
		}
		$directory->close();
		 ?>
		</div>
	</div>

<?php include "header_footer/footer.php"; ?>
	