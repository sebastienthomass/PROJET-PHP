<?php

if (isset($_POST["message"])) {
	$message = "Ce message proviens du formulaire
	Nom :" . " " . $_POST["nom"] . "
	Sujet" . " " . $_POST["sujet"] . "
	Message :" . " " . $_POST["message"] . "
	Proviens de :" . " " . $_POST["email"];

	$retour = mail("sthomas@gaming.bs", $_POST["sujet"], $message,
	"From:contact@exemple.fr" . "/r/," . "Reply-to" . $_POST["email"]);
	if ($retour) {
		echo "<p> L'email a bien été envoyé.</p>";
	
	}
}
?>
