<HTML>
    
    <HEAD>
        <TITLE>Espace membre</TITLE>
        <!--Feuilles de style-->
        <link rel = "stylesheet" type = "text/css" href = "style/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "style/underlinemenu.css">
        <link rel = "stylesheet" type = "text/css" href = "style/formTabl.css">

    </HEAD>
    
    
  <BODY>
    <div id ='page'>
        <!--En-tête-->
        <?php load_header();?>
        <!--Contenu de la page-->
        <div id='content'>
            <center>
                <img src="Images/membre.png"/>
            
				<?php include(get_view_address($include)); ?>
        </div>
        
        <!--Pied de page-->
        <?php load_footer();?>
    </div>
  
  </BODY>

</HTML>