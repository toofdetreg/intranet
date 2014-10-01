
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
                			<li><a href="/CHSCT/PV/PV_CHSCT_du_12_mars_2013.pdf" target="_blank">proc&egrave;s verbal CHSCT du 12 mars 2013</a></li>
                            <li><a href="/CHSCT/PV/PV_CHSCT_du_06_mai_2013.pdf" target="_blank">proc&egrave;s verbal CHSCT du 06 mai 2013</a></li>                            
                            <li><a href="/CHSCT/PV/CHSCT_PV_du_17_decembre_2013.pdf" target="_blank">proc&egrave;s verbal CHSCT du 17 D&eacute;cembre 2013</a></li>
							<li><a href="/CHSCT/PV/PV_CHSCT_du_20_fevrier_2014.pdf" target="_blank">proc&egrave;s verbal du CHSCT du 20 f&eacute;vrier 2014</a></li>
							<li><a href="/CHSCT/PV/PV_CHSCT_du_24_avril_2014.pdf" target="_blank">proc&egrave;s verbal du CHSCT du 24 avril 2014</a></li>
                </ul>
                </div>
                
            </div>
        </div>
    </body>
</html>
