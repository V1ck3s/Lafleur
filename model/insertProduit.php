<?php
	class InsertProduit{
		public static function getProduit(){
			$req='SELECT * FROM article';
			$sql=Connexion::getInstance();
			$res=$sql->request($req);
			return($res);
		}
		public static function getProduitCategorie($categorie){
			$req='SELECT * FROM article WHERE pdt_categorie=?';
			$sql=Connexion::getInstance();
			$res=$sql->request($req,array($categorie));
			return($res);
		}
	}