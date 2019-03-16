<?php
	$c = mysqli_connect('localhost', 'root', '') or die ("Impossible de se connecter au serveur !");
	mysqli_select_db($c, "utilisateurs") or die ("Impossible de se connecter à la base !");
	echo "string";
	$id = $_POST['id'];
	$nom = $_POST['n'];
	$prenom = $_POST['p'];
	$email = $_POST['e'];
	$mdp = $_POST['mdp'];
	$req = "INSERT INTO utilisateurs (identifiant, nom, prenom, email, mdp) VALUES ('$id', '$nom', '$prenom', '$email', '$mdp')";
	echo $req;
	$r = mysqli_query($c, $req) or die ("Problème avec la requête SQL");
	header('Location: connexion.html');
?>