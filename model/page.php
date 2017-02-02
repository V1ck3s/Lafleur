<?php
	function load_header(){
		?>
			<!-------------- AFFICHAGE DU FORMULAIRE DE CONNEXION-------------->
	<div id='header'>
		<?php

			//si l'utilisateur n'est pas connecté on le signal à l'utilisateur( !isset =si la variable n'est pas affectée )
			if(!isset($_SESSION['connexion']))
			{
				echo "&nbsp;Vous n'êtes pas connecté(e) ! ";
			}
			//Sinon on affiche son identifiant et un lien de déconnexion
			else
			{
				echo '<img src="Images/membres.png"/>';
				echo "<strong>".$_SESSION["connexion"]."</strong>";
				echo " &nbsp;<a href='?do=deconnexion'><img src='Images/deconnexion.png' title='Déconnexion'/></a>";
			}
		?> 
	</div>

	<!-------------- AFFICHAGE DU MENU -------------->
	<?php

		//Si l'utilisateur n'est pas connecté on affiche le menu complet
		if(!isset($_SESSION['connexion']))
		{
		?>
			<center>
					<div id='menu'> 
						<div id='underlinemenu'>
							<ul>
								<li><a href="./" title="Accueil">&nbsp;Accueil&nbsp;</a></li>
								<li><a href="?do=NosProduits" title="Notre gamme de produits">&nbsp;Nos Produits&nbsp;</a></li>
								<li><a href="?do=inscription" title="Inscrivez vous">&nbsp;Inscription&nbsp;</a></li>
								 <li><a href="?do=membre" title="Votre Espace membre">&nbsp;Espace membre&nbsp;</a></li>
								<li><a href="?do=Contact" title="Contactez-nous">&nbsp;Contact&nbsp;</a></li>  
							</ul>   
						</div>
					</div>
			</center>
		<?php
		}
		//Sinon l'utilisateur est connecté, on supprime l'accès a la page inscription
	else
	{
	?>
		<center>
			<div id='menu'> 
				<div id='underlinemenu'>
					<ul>
						<li><a href="./" title="Accueil">&nbsp;Accueil&nbsp;</a></li>
						<li><a href="?do=NosProduits" title="Notre gamme de produits">&nbsp;Nos Produits&nbsp;</a></li>
						<li><a href="?do=Panier&r=0" title="Mon panier d'achat">&nbsp;Mon Panier&nbsp;</a></li>
						<li><a href="?do=membre" title="Votre Espace membre">&nbsp;Espace membre&nbsp;</a></li>
						<li><a href="?do=Contact" title="Contactez-nous">&nbsp;Contact&nbsp;</a></li>  
					</ul>   
				</div>
			</div>
	</center>
	<?php
	}
	?>
		<?php
	}
	function load_footer(){
		
	}