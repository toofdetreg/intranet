
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
                <img src="./images/CarteDesBureauxDaccueil.JPG" width="600">

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=68+rue+Glasgow,+29200+brest&amp;sll=48.404691,-4.496756&amp;sspn=0.009573,0.020084&amp;ie=UTF8&amp;ll=48.39922,-4.482722&amp;spn=0.009574,0.020084&amp;z=16" target="_blank"> 
                    <img class="siege" src ="./images/siege-principal.png" width="60" style="position: absolute;  top:190px; left:285px;"></a>
                <span class="afficheSiege">
                    <strong>Si&egrave;ge principal</strong><br>68 rue Glasgow<br>
                    29200 Brest<br>
                    T&eacute;l : 02 29 00 45 00<br>
                    Fax : 02 29 00 45 29<br>
                </span>


                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=87+rue+de+la+Porte,+29200+BREST&amp;sll=48.402076,-4.461194&amp;sspn=0.009573,0.020084&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ba-recou" src ="./images/ba-brestponant.png" width="60" style="position: absolute;  top:260px; left:210px;"></a>
                    <span class="afficherecou">
                        <strong>Bureau d'accueil de Recouvrance</strong><br>87, rue de la Porte<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 49 89 89<br>
                        Fax : 02 98 49 89 80<br></span>

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=6+rue+du+pere+ricard,+29200+BREST&amp;sll=48.435542,-4.400605&amp;sspn=0.009567,0.020084&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ba-kerour" src ="./images/ba-brestponant.png" width="60" style="position: absolute;  top:265px; left:100px;"></a>
                    <span class ="affichekerour">
                        <strong>Bureau d'accueil de K&eacute;rourien</strong><br>6, rue du P&egrave;re Ricard<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 45 38 34<br>
                        Fax : 02 98 34 05 64<br></span>

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=Place+de+Saint-Herbot,+saint+renan&amp;sll=48.435542,-4.400605&amp;sspn=0.009382,0.020084&amp;ie=UTF8&amp;ll=48.465637,-4.568253&amp;spn=0.300037,0.6427&amp;z=11&amp;iwloc=A" target="_blank">
                    <img class="ba-renan" src ="./images/ba-brestponant.png" width="60" style="position: absolute;  top:145px; left:20px;"></a>
                    <span class ="afficherenan">
                        <strong>Bureau d'accueil de Saint-Renan</strong><br>10 place Saint-Herbot<br>
                        29200 Saint-Renan<br>
                        T&eacute;l : 02 29 00 46 59<br>
                        Fax : 02 98 32 63 70</span>


                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=138+route+du+Valy+Hir,+29200+BREST&amp;sll=48.411527,-4.471342&amp;sspn=0.009571,0.020084&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ag-ponant" src ="./images/point-orange.png" style="position: absolute;  top:220px; left:90px;"></a>
                    <span class ="afficheponant">
                        <strong>Agence Brest Ponant</strong><br>138, route du Valy-Hir<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 05 70 00<br>
                        Fax : 02 98 05 70 09</span>





                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=1+rue+du+Dauphin%C3%A9,+29200+BREST&amp;sll=48.383953,-4.502744&amp;sspn=0.009577,0.020084&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ba-dauph" src ="./images/ba-brestabers.png" width="60" style="position: absolute;  top:160px; left:170px;"></a>
                    <span class ="affichedauph">
                        <strong>Bureau d'accueil du Dauphin&eacute;</strong><br>1, rue du Dauphin&eacute;<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 47 39 22<br>
                        Fax : 02 98 03 40 47<br></span>

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=26+rue+du+Professeur+Langevin,+29200+brest&amp;sll=48.428061,-4.616318&amp;sspn=0.019136,0.040169&amp;ie=UTF8&amp;ll=48.404691,-4.496756&amp;spn=0.009573,0.020084&amp;z=16" target="_blank">
                    <img class="ba-kerber" src ="./images/ba-brestabers.png" width="60" style="position: absolute;  top:170px; left:250px;"></a>
                    <span class ="affichekerber">
                        <strong>Bureau d'accueil de Kerbernier</strong><br>26, rue du Professeur Langevin<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 47 49 50<br>
                        Fax : 02 98 47 95 80<br></span>


                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=6+rue+Gabriel+Faur%C3%A9,+29200+BREST&amp;sll=48.405331,-4.512911&amp;sspn=0.009573,0.020084&amp;ie=UTF8&amp;ll=48.410844,-4.498429&amp;spn=0.009571,0.020084&amp;z=16" target="_blank">
                    <img class="ba-kered" src ="./images/ba-brestabers.png" width="60" style="position: absolute;  top:125px; left:225px;"></a>
                    <span class ="affichekered">
                        <strong>Bureau d'accueil de K&eacute;r&eacute;dern</strong><br>6, rue Gabriel Faur&eacute;<br>
                        29200 Brest<br>
                        T&eacute;l : 02 29 00 46 99<br>
                        Fax : 02 98 01 04 52<br></span>


                <a href="https://maps.google.fr/maps?q=1+rue+paul+dukas,+29200+BREST&hl=fr&ie=UTF8&sll=48.41459,-4.471393&sspn=0.006922,0.013497&hnear=1+Rue+Paul+Dukas,+29200+Brest,+Finist%C3%A8re,+Bretagne&t=m&z=16" target="_blank">
                    <img class="ag-aber" src ="./images/point-bleu.png" style="position: absolute;  top:160px; right:300px;"></a>
                    <span class ="afficheaber">
                        <strong>Agence Brest Abers</strong><br>1, rue Paul Dukas<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 01 90 30<br>
                        Fax : 02 98 01 03 80</span>




                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=1+rue+Paul+Dukas,+29200+BREST&amp;sll=47.15984,2.988281&amp;sspn=10.041988,20.566406&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ba-guip" src ="./images/ba-brestelorn.png" width="60" style="position: absolute;  top:45px; right:50px;"></a>
                    <span class ="afficheguip">
                        <strong>Bureau d'accueil de Guipavas</strong><br>20, Venelle d&amp;#039;Armorique<br>
                        29490 Guipavas<br>
                        T&eacute;l : 02 29 00 46 79<br>
                        Fax : 02 98 32 13 82<br></span>
                      

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=37+route+de+Quimper,+29200+BREST&amp;sll=48.41459,-4.471393&amp;sspn=0.009571,0.020084&amp;ie=UTF8&amp;ll=48.403993,-4.459956&amp;spn=0.009573,0.020084&amp;z=16" target="_blank">
                    <img class="ba-dixm" src ="./images/ba-brestelorn.png" width="60" style="position: absolute;  top:180px; right:130px;"></a>
                    <span class ="affichedixm">
                        <strong>Bureau d'accueil de Dixmude</strong><br>37, route de Quimper<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 41 05 05<br>
                        Fax : 02 98 41 05 09<br></span>

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=25+rue+du+8+mai+1945,+29200+BREST&amp;sll=48.408039,-4.498118&amp;sspn=0.009572,0.020084&amp;ie=UTF8&amp;z=16" target="_blank">
                    <img class="ba-ponta" src ="./images/ba-brestelorn.png" width="60" style="position: absolute;  top:125px; right:205px;"></a>
                    <span class ="afficheponta">
                        <strong>Bureau d'accueil de Pontan&eacute;zen</strong><br>12, rue Degas<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 41 75 10<br>
                        Fax : 02 98 41 44 38</span>

                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=21+rue+S%C3%A9bastopol,+29200+BREST&amp;sll=48.410844,-4.498429&amp;sspn=0.009571,0.020084&amp;ie=UTF8&amp;ll=48.398622,-4.473109&amp;spn=0.009574,0.020084&amp;z=16" target="_blank">
                    <img class="ba-centre" src ="./images/ba-brestelorn.png" width="60" style="position: absolute;  top:190px; right:215px;"></a>
                    <span class ="affichecentre">
                        <strong>Bureau d'accueil du Centre Ville</strong><br>21, rue S&eacute;bastopol<br>
                        29200 Brest<br>
                        T&eacute;l : 02 29 00 46 74<br>
                        Fax : 02 98 44 27 73<br></span>



                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=6+rue+sysley,+29200+BREST&amp;sll=48.398622,-4.473109&amp;sspn=0.009574,0.020084&amp;ie=UTF8&amp;ll=48.41459,-4.471393&amp;spn=0.009571,0.020084&amp;z=16" target="_blank">
                    <img class="ag-elorn" src ="./images/point-vert.png" style="position: absolute;  top:170px; right:215px;"></a>
                    <span class ="afficheelorn">
                        <strong>Agence Brest Elorn</strong><br><br>25, rue du 8 mai 1945<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 34 60 90<br>
                        Fax : 02 98 34 60 89<br></span>
                        
                <a href="http://maps.google.fr/maps?f=q&amp;hl=fr&amp;q=33+r+Nic%C3%A9phore+Niepce,+brest&amp;sll=48.400716,-4.470749&amp;sspn=0.07465,0.160675&amp;ie=UTF8&amp;z=16&amp;iwloc=addr" target="_blank">
                    <img class="regie" src ="./images/regie.png" style="position: absolute;  top:40px; right:260px;"></a>
                    <span class ="afficheregie">
                        <strong>R&eacute;gie</strong><br><br>33, rue Nic&eacute;phore Niepce<br>
                        29200 Brest<br>
                        T&eacute;l : 02 98 47 40 90<br>
                        Fax : 02 98 47 99 30</span>

                <script>
                    $("span").hide();
                    $(".siege").mouseenter(function() {
                        $(".afficheSiege").show();
                    });
                    $(".siege").mouseout(function() {
                        $(".afficheSiege").hide();
                    });

                    $(".ba-recou").mouseenter(function() {
                        $(".afficherecou").show();
                    });
                    $(".ba-recou").mouseout(function() {
                        $(".afficherecou").hide();
                    });

                    $(".ba-kerour").mouseenter(function() {
                        $(".affichekerour").show();
                    });
                    $(".ba-kerour").mouseout(function() {
                        $(".affichekerour").hide();
                    });
                    $(".ba-renan").mouseenter(function() {
                        $(".afficherenan").show();
                    });
                    $(".ba-renan").mouseout(function() {
                        $(".afficherenan").hide();
                    });


                    $(".ag-ponant").mouseenter(function() {
                        $(".afficheponant").show();
                    });
                    $(".ag-ponant").mouseout(function() {
                        $(".afficheponant").hide();
                    });


                    $(".ba-dauph").mouseenter(function() {
                        $(".affichedauph").show();
                    });
                    $(".ba-dauph").mouseout(function() {
                        $(".affichedauph").hide();
                    });


                    $(".ba-kerber").mouseenter(function() {
                        $(".affichekerber").show();
                    });
                    $(".ba-kerber").mouseout(function() {
                        $(".affichekerber").hide();
                    });

                    $(".ba-kered").mouseenter(function() {
                        $(".affichekered").show();
                    });
                    $(".ba-kered").mouseout(function() {
                        $(".affichekered").hide();
                    });


                    $(".ag-aber").mouseenter(function() {
                        $(".afficheaber").show();
                    });
                    $(".ag-aber").mouseout(function() {
                        $(".afficheaber").hide();
                    });

                    $(".ba-guip").mouseenter(function() {
                        $(".afficheguip").show();
                    });
                    $(".ba-guip").mouseout(function() {
                        $(".afficheguip").hide();
                    });


                    $(".ba-dixm").mouseenter(function() {
                        $(".affichedixm").show();
                    });
                    $(".ba-dixm").mouseout(function() {
                        $(".affichedixm").hide();
                    });

                    $(".ba-ponta").mouseenter(function() {
                        $(".afficheponta").show();
                    });
                    $(".ba-ponta").mouseout(function() {
                        $(".afficheponta").hide();
                    });

                    $(".ba-centre").mouseenter(function() {
                        $(".affichecentre").show();
                    });
                    $(".ba-centre").mouseout(function() {
                        $(".affichecentre").hide();
                    });
                    
                     $(".ag-elorn").mouseenter(function() {
                        $(".afficheelorn").show();
                    });
                    $(".ag-elorn").mouseout(function() {
                        $(".afficheelorn").hide();
                    });
                    
                 $(".regie").mouseenter(function() {
                        $(".afficheregie").show();
                    });
                    $(".regie").mouseout(function() {
                        $(".afficheregie").hide();
                    });



                </script>
            </div>
        </div>


    </body>
</html>