<?php
	load_model("all");
	
	if(isset($_POST["preference"])){
		$res=InsertProduit::getProduitCategorie($_POST["preference"]);
		$post="&post=preference=".$_POST['preference'];
	}
	else{
		$res=InsertProduit::getProduit();
		$post="";
	}
	$CONTROLLER["view"]="NosProduitsView";