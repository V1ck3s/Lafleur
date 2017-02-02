<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Nos Produits</TITLE>
        <!--Feuilles de style-->
        <link rel = "stylesheet" type = "text/css" href = "style/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "style/underlinemenu.css">
        <link rel = "stylesheet" type = "text/css" href = "style/formTabl.css">
        <!--Favicon-->
        <link rel="shortcut icon" href="Images/favicon.png" />
        <script type="text/javascript" src="JS/jquery.js"></script>
        <script type="text/javascript">$(document).ready(function(){$("div.messConf").delay(2000).fadeOut();});</script>
    </HEAD>
    
    
  <BODY>
    <div id ='page'>
        <!--En-tête-->
        <?php load_header();?>
        <!--Contenu de la page-->
        <div id='content'>
            <center>
                <img src="Images/produits.jpg"/>
            </center>
            <br>
            <br>
            <center>
                Sélectionnez votre catégorie de produit :
                <!--Formulaire de sélection de la catégorie-->
                <form method="post" action="?do=NosProduits">
                    <select name = "preference">
                        <option value ="bul">Bulbes </option>
                        <option value="ros">Rosiers</option>
                        <option value="mas">Plantes Massif</option>
                    </select>
                    <input type="submit" value="Afficher">
                </form>
            </center>  
			<!--Traitement de l'inclusion des produits-->
			<table>
            <?php
				while($data = $res->fetch())
				{
					// Affichage des informations de l'enregistrement en cours
					//Si l'utilisateur n'est pas connecté il ne peut pas faire d'ajout au panier
						echo "
							 <tr class='tabProduits'>
								 <td class='tabProduits'>".$data[0]."</td>
								 <td class='tabProduits'>".$data[1]."</td>
								 <td class='tabProduits'>".$data[2]." €</td>
								 <td class='tabProduits'>".$data[3]."</td>
								 <td class='tabProduits'><img src='Images/".$data[0].".jpg'></td>
								 <td class='tabProduits'>
								   <a href='?do=modifPanier&action=ajout&amp;pdt_ref=$data[0]&amp;pdt_designation=$data[1]&amp;pdt_prix=$data[2]&amp;quantite=1&prec=NosProduits$post'>
									  Ajouter au panier
								   </a>
								 </td>
								
							 </tr>
							
						 ";

								
				}
			?>
			</table>
        </div>
        <!--Pied de page-->
        <?php load_footer();?>
    </div>

	
<?php
//Si la variable messConf n'est pas vide on affiche un message de confirmation
if(isset($_SESSION['messConf']))
{
    echo "<div class='messConf'>".$_SESSION['messConf']."</div>";
    unset($_SESSION['messConf']);
}

?>
  </BODY>

</HTML>