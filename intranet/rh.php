<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <link rel="stylesheet" href="css/style_ie.css" />
        <![endif]-->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="js/jquery.ui.datepicker-fr.js"></script>
  <script src="js/lightbox-2.6.min.js"></script>
          <script src="js/placeme.js"></script>

  <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/texte.css" />
  <link rel="stylesheet" href="css/lightbox.css" />
  
   <script>
  $(function() {
    $( "#accordion" ).accordion({
	  active: false,
	  collapsible: true ,
     heightStyle: "content"
    });
  });
  </script>


        <title>Intranet BMH</title>

    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php"><div id="titreimg"></div></a>
                <a href="index.php"><div id="logo"></div></a>
                <div id="menu">
                    <ul >
                        <li><a href="actualite.php">Actualit&eacute;</a></li>
                        <li><a href="revuepresse.php">Revue De Presse</a></li>
                        <li>Location/Vente
                            <ul  class="niveau2">
                                <li><a href="coinvente.php">Le coin des ventes</a></li>
                                <li><a href="louer.php">A louer</a></li>
                            </ul></li>
                        <li>Chantiers
                            <ul class="niveau2">
                                <li><a href="chantier.php">Chantiers phares</a></li>
                                <li><a href="nouveauchantier.php">Nouveaux Chantiers</a></li>
                            </ul></li>
                        <li><a href="catlogement.php">Catalogue Logement </a></li>
                        <li><a href="rh.php">Ressources humaines</a></li>
                        <li>Comit&eacute; d'entreprise
                            <ul class="niveau2">
                                <li><a href="pv.php">PV</a></li>
                                <li><a href="activite.php">Activit&eacute; socio-culturel</a></li>
                            </ul></li>
                        <li>CHSCT
                            <ul class="niveau2">
                                <li><a href="reunion.php">PV r&eacute;union</a></li>
                                <li><a href="infodiverse.php">Informations Diverses</a></li>
                            </ul></li>
                        <li><a href="coordonnee.php">Acc&egrave;s/ Coordonn&eacute;es</a></li>
                    </ul>
                </div>
            </nav>
            <header>

                <div id="recherche" >

               

                </div>
                <div id="demarquation">
                    <img src="./images/barre.png">
                </div>
            </header>
			
			<aside>
                <div id="annuaire"><img src="./images/annuaire.png">
                    <div id="idannuaire">
                        <?php include 'formannuaire.php'; ?>
                    </div>
                </div>
                <div id="nouvelleembauche"><img src="./images/nouvelleembauche.png"></div>
            </aside>
            <div id="page">
                 <div id ="accordion">
				 <h3> Accords d'entreprise</h3> 
					<?php include 'accordEntreprise.php'; ?>
				<h3> Fiches de postes</h3> 
            <?php include 'fichesPostes.php'; ?>
				<h3> livret du personnel</h3> 
			<?php include 'livretPersonnel.php'; ?>
				 </div>  
				 
            </div>
                        
            <div id="coinpage"><img src="./images/coinpage.png"></div>
        </div>
    </body>
</html>
