
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
        <script>
            $(function() {
                $("#accordion").accordion({
                    heightStyle: "content",
                    collapsible: true,
                    active: false
                });
            });
        </script>
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

                <div id ="accordion">
                    <h3>Vente PSLA</h3>
                    <div id="psla">
                        <h1>Le PSLA, votre achat en 2 temps</h1>

                        <H2>1. Vous louez | 2. Vous achetez</h2>
                        <h3> L&#8217;&#233;pargne constitu&#233;e lors de la premi&#232;re &#233;tape repr&#233;sente un apport personnel.</h3>
                        <TABLE> 
                            <h3>Des avantages exceptionnels :</h3>
                            <TR> 
                                <TH>
                                    &#9632; Un financement personnalis&#233;</br>
                                    &#9632; La possibilit&#233; de compl&#233;ter le financement de l&#8217;acquisition par un pr&#234;t &agrave; 0 %</br>
                                    &#9632; possibilit&#233; d&#8217;aide personnalis&#233;e au logement,
                                    APL (suivant ressources),</br>

                                </TH> 
                                <TH> 

                                    &#9632; Des avantages fiscaux importants :</br>
                                    &gt; exon&#233;ration de taxe fonci&#232;re pendant 15 ans,</br>
                                    &#9632; garantie de rachat (pour une liste limitative d&#8217;&#233;v&#233;nements), etc.</br></TH> 
                            </TR> 
                        </TABLE> 


                        <h1> nos op&#233;rations PSLA en cours : </h1>
                        <p> <a href='/vente/penarchoat/PSLA_penarchoat.pdf'><img src='/vente/penarchoat/PSLA_penarchoat-0.jpg' width='50px' height='70px'></a>Pen Ar C'hoat. <a href='penarchoat.php'>D&#233;tail de l'offre</a> </p>
                        <p><a href='/vente/valyhir/PSLA_valyhir.pdf'><img src='/vente/valyhir/PSLA_valyhir-0.jpg' width='50px' height='70px'></a>Valy-hir. <a href='valyhir.php'>D&#233;tail de l'offre</a> </p>
						<p> <a href='/vente/gerard_de_nerval/211187_plaquette_PSLA_V10_appartement.pdf'><img src='/vente/gerard_de_nerval/211187_plaquette_PSLA_V10_appartement.jpeg' width='50px' height='70px'></a>Gerard de Nerval (collectif). <a href='gerard_de_nerval(collectif).php'>D&#233;tail de l'offre</a> </p>
						<p> <a href='/vente/gerard_de_nerval/211187_plaquette_PSLA_V10_maison.pdf'><img src='/vente/gerard_de_nerval/211187_plaquette_PSLA_V10_maison.jpeg' width='50px' height='70px'></a>Gerard de Nerval (maison). <a href='gerard_de_nerval(maison).php'>D&#233;tail de l'offre</a> </p>
                    </div> 
                    <h3>Vente HLM</h3>
                    <div id="vente">
                        <h1>La vente HLM</h1>
                        <h2>Avantages :</h2>
                        <h3>&#9632; Garanties de rachat (sous conditions)</br>
                            &#9632; Garantie de relogement</h3>
                        <p>public concern&#233; :</br>
                            ce programme s'adresse dans un premier temps aux locataire occupants des logements mis en vente, ainsi qu'a leur conjoint, &agrave; leur ascendant et descendants sous conditions de ressources, sur demande du locataire en titre
                            il sera ensuite &#233;largi, par ordre d'anciennet&#233; : </br>
                            - aux locataires du quartier concern&#233;,</br>
                            - aux locataires de Brest Metropole Habitat,</br>
                            - aux enfants occupant un logement dont un parent est locataire en titer d'un logement propri&#233;t&#233; de brest m&#233;tropole habitat,</br>
                            - et enfin a toute personne ext&#233;rieur &agrave; Brest m&#233;tropole habitat.</br>
                        </p>

                        <h1>nos op&#233;rations de vente en cours :</h1>
                        <p>K&#233;r&#233;dern. <a href='keredern.php'>D&#233;tail de l'offre</a></p>
                        <p>K&#233;rourien. <a href='kerourien.php'>D&#233;tail de l'offre</a></p>



                    </div>                   
                </div>


            </div>
        </div>
    </body>
</html>
