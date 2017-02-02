<?php
	class LigneCommande{
		private $commande;
		private $article;
		private $prix;
		private $qte;
		
		function __construct($commande,$article,$prix,$qte){
			$this->commande=$commande;
			$this->article=$article;
			$this->prix=$prix;
			$this->qte=$qte;
		}
		public function getCommande(){
			return($this->commande);
		}
		public function getArticle(){
			return($this->article);
		}
		public function getPrix(){
			return($this->prix);
		}
		public function getQuantite(){
			return($this->qte);
		}
	}