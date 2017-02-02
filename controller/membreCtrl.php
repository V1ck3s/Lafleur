<?php
	load_model("all");
	
	if(isset($_SESSION["connexion"])){
		$req="SELECT distinct nro_commande, date_commande FROM commande WHERE nro_client = ? ORDER BY date_commande";
		$connexion=Connexion::getInstance();
		$res=$connexion->request($req,array($_SESSION["connexion"]));
		$include="espaceMembre";
	}
	else{
		$include="connexionForm";
	}
	$CONTROLLER["view"]="membreView";