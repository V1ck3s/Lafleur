<?php
	class Membre{
		private $no;
		private $mail;
		private $nom;
		private $prenom;
		private $adresse;
		private $cp;
		private $ville;
		private $pass;
		
		function __construct($mail,$nom,$prenom,$adresse,$cp,$ville,$pass){
			$this->mail=$mail;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->cp=$cp;
			$this->ville=$ville;
			$this->pass=md5($pass);
		}
		public function getMail(){
			return($this->mail);
		}
		public function getNom(){
			return($this->nom);
		}
		public function getPrenom(){
			return($this->prenom);
		}
		public function getAdresse(){
			return($this->adresse);
		}
		public function getCP(){
			return($this->cp);
		}
		public function getVille(){
			return($this->ville);
		}
		public function getPass(){
			return($this->pass);
		}
	}