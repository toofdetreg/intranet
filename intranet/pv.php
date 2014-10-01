
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
				
                            <li><a href="/CE/PV/Proces-verbal_du_29_janvier_2013.pdf" target="_blank">proc&egrave;s verbal du 29 janvier 2013</a></li>
                            <li><a href="/CE/PV/Proces-verbal_du_18_avril_2013.pdf" target="_blank">proc&egrave;s verbal du 18 avril 2013</a></li>
                            <li><a href="/CE/PV/Proces-verbal_du_28_mai_2013.pdf" target="_blank">proc&egrave;s verbal du 28 mai 2013</a></li>
                            <li><a href="/CE/PV/Proces-verbal_du_29_juillet_2013.pdf" target="_blank">proc&egrave;s verbal du 29 juillet 2013</a></li>
                            <li><a href="/CE/PV/Proces_verbal_du_9_aout_2013.pdf" target="_blank">proc&egrave;s verbal du 09 ao&#251;t 2013</a></li>
							<li><a href="/CE/PV/PV_CE_17-12-2013.pdf" target="_blank">proc&egrave;s verbal du 17 d&eacute;cembre 2013</a></li>
							<li><a href="/CE/PV/PV_CE_20-05-2014.pdf" target="_blank">proc&egrave;s verbal du 20 mai 2014</a></li>
                </ul>
                </div>
                
            </div>
        </div>
    </body>
</html>
