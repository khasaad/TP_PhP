<?php
	$c = mysqli_connect('localhost', 'root', '') or die ("Impossible de se connecter au serveur !");
	mysqli_select_db($c, "utilisateurs") or die ("Impossible de se connecter à la base !");
	$id 	= trim(addslashes($_POST['id']));
	$mdp 	= trim(addslashes($_POST['mdp']));
	$r = mysqli_query($c, "SELECT '1' FROM utilisateurs WHERE identifiant = '$id' AND mdp = '$mdp'") or die ("Problème avec la requête SQL !");
	$num = mysqli_num_rows($r);

	if ($num == 0) {
		header("Location: connexion.html");
	}
	else {
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['mdp'] = $mdp;
		/*header("Location: espace_membre.php");*/
		echo "Félicitation vous êtes connecté ! Cliquez sur <a href=\"espace_membre.php\">espace membre</a>pour accéder à votre page membre";
	}
?>