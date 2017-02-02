<?php
	load_model("all");
	
	if(isset($_POST["ins_nom"])){
		$compte=new Membre($_POST["ins_email"],$_POST["ins_nom"],$_POST["ins_prenom"],$_POST["ins_adresse"],$_POST["ins_CP"],$_POST["ins_ville"],$_POST["pass"]);
		if(ConnexionCompte::createAccount($compte)){
			$CONTROLLER["redirect"]="./?do=membre";
		}
		else{
			$CONTROLLER["redirect"]="./";
		}
	}