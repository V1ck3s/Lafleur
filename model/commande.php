<?php
	class Commande{
		private $no;
		private $jour;
		private $mois;
		private $annee;
		private $lc=array();
		
		function __construct($no,$jour=null,$mois=null,$annee=null,$lc=array()){
			if($jour===null){
				
			}
			else{
				$this->jour=$jour;
				$this->mois=$mois;
				$this->annee=$annee;
				$this->lc=$lc;
			}
		}
		
		public function getJour(){
			return($this->jour);
		}
		public function getMois(){
			return($this->mois);
		}
		public function getAnnee(){
			return($this->annee);
		}
		public function getLC(){
			return($this->lc);
		}
	}