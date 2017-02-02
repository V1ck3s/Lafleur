<?php
	if(!isset($_SESSION["connection"])){
		load_model("all");
		
		$CONTROLLER["view"]="inscriptionView";
	}
	else{
		load_controller("error404Ctrl");
	}