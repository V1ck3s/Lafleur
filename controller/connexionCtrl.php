<?php
	load_model("all");
	
	if(!isset($_SESSION["connection"])){
		ConnexionCompte::connection($_POST["login_connexion"],$_POST["pass_connexion"]);
		$CONTROLLER["redirect"]="./";
	}
	else{
		$CONTROLLER["redirect"]="./";
	}