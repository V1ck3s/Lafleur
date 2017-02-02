<?php
	class Article{
		private $ref;
		private $designation;
		private $prix;
		private $categorie;
		
		function __construct($ref,$designation=null,$prix,$categorie){
			if($designation===null){
				
			}
			else{
				$this->ref=$ref;
				$this->designation=$designation;
				$this->prix=$prix;
				$this->categorie=$categorie;
			}
		}
		public function getRef(){
			return($this->ref);
		}
		public function getDesignation(){
			return($this->designation);
		}
		public function getPrix(){
			return($this->prix);
		}
		public function getCategorie(){
			return($this->categorie);
		}
	}