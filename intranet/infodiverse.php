
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/PIE.js"></script>
                <link rel="stylesheet" href="css/style_ie8.css" />
        <![endif]-->

        
        <!--[if lt IE 8]>
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
       <title>Intranet BMH</title>

    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;"><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
               <?php include 'menu.php'; ?>
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
            <div id="coinpage"><img src="./images/coinpage.png"></div>
                        <div id="page">
                      <div id="pv">
                <ul>
                            <li><a href="/CHSCT/fiche/CHSCT-Mode_emploi.pdf" target="_blank">CHSCT Mode emploi</a></li>
                            <li><a href="/CHSCT/fiche/Fiche_04-Locaux_de_stockage-produits_entretien.pdf" target="_blank">Locaux de stockage produits d'entretien</a></li>
                            <li><a href="/CHSCT/fiche/Fiche_05-Intervention_travaux_en_hauteur.pdf" target="_blank">Intervention travaux en hauteur</a></li>
                            <li><a href="/CHSCT/fiche/Fiche_06-Equipements_de_Protection_Individuelle.pdf" target="_blank">Equipements de Protection Individuelle</a></li>
                            <li><a href="/CHSCT/fiche/obligation_du_salarie-securite_au_travail.pdf" target="_blank">obligation du salari&eacute;/s&eacute;curit&eacute; au travail</a></li>
                            <li><a href="/CHSCT/fiche/posture_au_travail.pdf" target="_blank">Posture au travail</a></li>
               
                </ul>
                </div>
                
            </div>
        </div>
    </body>
</html>
