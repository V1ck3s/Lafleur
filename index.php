<?php
	session_start();
	include("include/all.php");
	
	$mvc->state("index","indexCtrl","indexView");
	$mvc->state("NosProduits","NosProduitsCtrl");
	$mvc->state("Panier","PanierCtrl","PanierView");
	$mvc->state("membre","membreCtrl");
	$mvc->state("Contact","ContactCtrl");
	$mvc->state("connexion","connexionCtrl");
	$mvc->state("deconnexion","deconnexionCtrl");
	$mvc->state("inscription","inscriptionCtrl");
	$mvc->state("traitement_inscription","traitementInscriptionCtrl");
	$mvc->state("traitement_commande","traitementCommandeCtrl");
	$mvc->state("traitement_quantite","traitementQuantiteCtrl");
	$mvc->state("modifPanier","modifPanierCtrl");
	$mvc->dstate("404error","404error");
	
	$mvc->start();