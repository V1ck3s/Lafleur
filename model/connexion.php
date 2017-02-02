<?php
	class Connexion{
		private static $mail;
		private static $pdo=null;
		
		public static function getInstance(){
			if(Connexion::$pdo===null){
				Connexion::$pdo=new DataBase("mysql","localhost","root","","LAFLEUR_BDD");
				if(!Connexion::$pdo->getState()){
					die("Impossible de se connecter à la base de données");
				}
			}
			return(Connexion::$pdo);
		}
		public static function getMail(){
			if(isset($_SESSION["connexion"])){
				return($_SESSION["connexion"]);
			}
			else{
				return("Vous n'êtes pas connecté");
			}
		}
	}