<?php
	class ConnexionCompte{
		private $membre;
		
		public static function connection($mail,$password){
			$password=md5($password);
			$req="
				SELECT COUNT(*)
				FROM client
				WHERE ins_email=?
				AND pass=?
			";
			$sql=Connexion::getInstance();
			$res=$sql->request($req,array($mail,$password))->fetch();
			if($res["COUNT(*)"]>0){
				$req="
					SELECT nro_client
					FROM client
					WHERE ins_email=?
					AND pass=?
				";
				$res=$sql->request($req,array($mail,$password))->fetch();
				$_SESSION["connexion"]=$mail;
				return(true);
			}
			else{
				return(false);
			}
		}
		public static function createAccount($membre){
			$pdo=Connexion::getInstance();
			$req="
				SELECT COUNT(*)
				FROM client
				WHERE ins_email=?
			";
			$num=$pdo->request($req,array($membre->getMail()))->fetch();
			if($num["COUNT(*)"]==0){
				$req="
					INSERT INTO client(ins_email,ins_nom,ins_prenom,ins_adresse,ins_CP,ins_ville,pass)
					VALUES(?,?,?,?,?,?,?)
				";
				
				$pdo->request($req,array($membre->getMail(),$membre->getNom(),$membre->getPrenom(),$membre->getAdresse(),$membre->getCP(),$membre->getVille(),$membre->getPass()));
				$_SESSION["connexion"]=$membre->getMail();
				return(true);
			}
			else{
				return(false);
			}
		}
	}