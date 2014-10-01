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

  <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/texte.css" />
  <link rel="stylesheet" href="css/lightbox.css" />
          <script src="js/placeme.js"></script>

        <title>Intranet BMH</title>


    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;" ><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
<?php include 'menu.php'; ?>
            </nav>
            <header>
                <div id="recherche" >
<?php 
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
$d = strftime("%A %d %B %Y");
$date = ucfirst($d);

echo $date ;
   require 'stdujour.php';     
        ?><br>
Bonne f&ecirc;te aux : <?php echo $saintdujour; ?>

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
               			<a href="/MESI/Lettre_info_MeSi_Fev2014.pdf">Lettre d&#39;information du 17 F&eacute;vrier 2014</a>
                </div>

            </div>
        </div>

    </body>
</html>
