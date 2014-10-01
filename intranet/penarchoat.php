<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <link rel="stylesheet" href="css/style_ie.css" />
        <![endif]-->

        <script src="js/jquery-1.10.2.min.js"></script>

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/texte.css" />


        <title>Intranet BMH</title>

    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;"><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
                <div id="menu">
                    <ul >
                    	<li><a href="index.php">Accueil</a></li>
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

                    <form id="search" method="post">

                        <input class="search_data" name="saisie" type="text" placeholder="Mots-Clefs..." required />
                        <input class="btn-right-fleche" name="go" type="submit" value="" />
                    </form>

                </div>
                <div id="demarquation">
                    <img src="./images/barre.png">
                </div>
            </header>
            <div id="page">
                <div id='description'>
                    
 <pre>                
                    <H1> LES VILLAS DE PEN AR C'HOAT </br></H1>
NOMBRE DE PAVILLONS : 9</br>
DATE DE LIVRAISON PREVUE : Fin du 1er semestre 2014</br>
REPARTITION DES PAVILLONS : T4 : 8, T5 : 1</br>
PAVILLONS DISPONIBLES &agrave; ce jour : T4 : 5, T5 : 0</br>	
PRIX ACHAT (selon le lot choisi) : T4 : de 173 000 &euro; &agrave; 179 000 &euro; T5 : 199 000 &euro;</br>
LOYER MENSUEL(hors part acquisitive) : T4 : 659,32 &euro;, T5 : 736,71 &euro;</br>
SURFACE HABITABLE PAVILLONS DISPONIBLES, HORS GARAGE : T4 : 80,80 m&sup2, T5 : 93,05 m&sup2</br>
SURFACE TERRAINS DES LOTS DISPONIBLES : T4 : de 258 &agrave; 337 m&sup2, T5 : 333 m&sup2</br>
 </pre>  </div>
                
                
            </div>
            <aside>
                <div id="annuaire"><img src="./images/annuaire.png">
                    <div id="idannuaire">
                                            <?php include 'formannuaire.php'; ?>
                    </div>
                </div>
                <div id="nouvelleembauche"><img src="./images/nouvelleembauche.png"></div>
            </aside>
            <div id="coinpage"><img src="./images/coinpage.png"></div>
        </div>
    </body>
</html>
