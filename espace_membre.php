<?php
	session_start();
	if (!$_SESSION['id'] || !$_SESSION['mdp']) {
		header("Location: connexion.html");
	}
	else {
		echo "Vous êtes dans l'espace membre<br />";
		echo "Vous vous êtes authentifié comme $_SESSION[id] et votre mot de passe est $_SESSION[mdp]";
	}